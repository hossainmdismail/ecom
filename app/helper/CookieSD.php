<?php

namespace App\Helpers;

use App\Models\Product;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;

class CookieSD
{
    public static function getProductData(): array
    {
        $cookieValue = Request::cookie('product_data');
        $productData = json_decode($cookieValue, true) ?? [];

        // Filter out invalid or non-numeric entries
        $productData = array_filter($productData, function ($item) {
            return is_array($item) && isset($item['id']) && isset($item['quantity']) && is_numeric($item['id']) && is_numeric($item['quantity']);
        });

        return $productData;
    }

    /**
     * Adds a product ID and quantity to the cookie.
     *
     * @param int $productId
     * @param int $quantity
     * @return void
     */
    public static function addToCookie(int $productId, int $quantity): void
    {
        $productData = self::getProductData();

        // Check if the product ID already exists in the array
        $existingProductIndex = array_search($productId, array_column($productData, 'id'));

        if ($existingProductIndex !== false) {
            // If the product already exists, update its quantity
            $productData[$existingProductIndex]['quantity'] += $quantity;
        } else {
            // If the product does not exist, add it to the array
            $productData[] = ['id' => $productId, 'quantity' => $quantity];
        }

        $encodedProductData = json_encode($productData);
        Cookie::queue(Cookie::forever('product_data', $encodedProductData));
    }


    /**
     * Removes a product ID from the cookie.
     *
     * @param int $productId
     * @return void
     */
    public static function removeFromCookie(int $productId): void
    {
        $productIds = self::getProductData();
        $updatedProductIds = array_filter($productIds, function ($id) use ($productId) {
            return $id !== $productId;
        });
        $encodedProductIds = json_encode($updatedProductIds);
        Cookie::queue(Cookie::forever('product_ids', $encodedProductIds));
    }

    public static function data()
    {
        $cookie = self::getProductData();

        if (!empty($cookie)) {
            $data = Product::query();

            $products = $data->whereIn('id', $cookie)
                ->where('stock_status', 1)
                ->get();

            $totalPrice = $products->sum('finalPrice');

            return [
                'products' => $products,
                'price'    => $totalPrice,
                'total'    => $products->count(),
            ];
        }

        return [
            'products' => [],
            'price'    => 0.00,
            'total'    => 0,
        ];
    }

    /**
     * Reduces the quantity of a product in the cookie.
     *
     * @param int $productId
     * @param int $quantity
     * @return void
     */
    public static function reduceQuantityInCookie(int $productId, int $quantity): void
    {
        $productData = self::getProductData();

        // Find the index of the product in the array
        $existingProductIndex = array_search($productId, array_column($productData, 'id'));

        if ($existingProductIndex !== false) {
            // If the product exists, reduce its quantity
            $productData[$existingProductIndex]['quantity'] -= $quantity;

            // If the quantity becomes zero or negative, remove the product from the array
            if ($productData[$existingProductIndex]['quantity'] <= 0) {
                unset($productData[$existingProductIndex]);
            }

            // Update the cookie with the modified product data
            $encodedProductData = json_encode($productData);
            Cookie::queue(Cookie::forever('product_data', $encodedProductData));
        }
    }
}
