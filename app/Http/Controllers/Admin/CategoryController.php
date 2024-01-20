<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Photo;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ProductCategory::all();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:product_categories|max:255',
        ]);
        Photo::upload($request->category_image, 'files/category', $request->category_name);
        ProductCategory::insert([
            'category_name' => $request->category_name,
            'category_image' => Photo::$name,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_tags' => $request->seo_tags,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('succ', 'Category added...');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = ProductCategory::find($id);
        return view('backend.category.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_name' => 'required|unique:product_categories|max:255',
        ]);
        Photo::upload($request->category_image, 'files/category', $request->category_name);
        ProductCategory::where('id', $id)->update([
            'category_name' => $request->category_name,
            'category_image' => Photo::$name,
            'seo_title' => $request->seo_title,
            'seo_description' => $request->seo_description,
            'seo_tags' => $request->seo_tags,
            'updated_at' => Carbon::now(),
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = ProductCategory::find($id);
        return 'sdf';
    }
}
