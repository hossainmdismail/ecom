<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;

class CookieSD
{
    /**
     * Gets the array of product IDs from the cookie.
     *
     * @return array
     */
    public static function getProductIds(): array
    {
        $cookieValue = Request::cookie('product_ids');
        return json_decode($cookieValue, true) ?? [];
    }

    /**
     * Adds a product ID to the cookie.
     *
     * @param int $productId
     * @return void
     */
    public static function addToCookie(int $productId): void
    {
        $productIds = self::getProductIds();
        if (!in_array($productId, $productIds)) {
            $productIds[] = $productId;
            $encodedProductIds = json_encode($productIds);
            Cookie::queue(Cookie::forever('product_ids', $encodedProductIds));
        }
    }

    /**
     * Removes a product ID from the cookie.
     *
     * @param int $productId
     * @return void
     */
    public static function removeFromCookie(int $productId): void
    {
        $productIds = self::getProductIds();
        $updatedProductIds = array_filter($productIds, function ($id) use ($productId) {
            return $id !== $productId;
        });
        $encodedProductIds = json_encode($updatedProductIds);
        Cookie::queue(Cookie::forever('product_ids', $encodedProductIds));
    }
}
