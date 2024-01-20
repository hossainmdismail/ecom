<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\ProductCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Photo;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = Banner::all();
        return view('backend.banner.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view('backend.banner.create_banner', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'banner_title' => 'required|unique:banners|max:255',
        ]);
        Photo::upload($request->banner_image, 'files/banner', $request->banner_title);
        Banner::insert([
            'banner_category' =>$request->banner_category,
            'banner_title' =>$request->banner_title,
            'banner_image' =>Photo::$name,
            'link' =>$request->link,
            'banner_description' =>$request->banner_description,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('succ', 'Banner added...');
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
        $request = Banner::find($id);
        $categories = ProductCategory::all();
        return view('backend.banner.edit_banner', compact('request', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'banner_title' => 'required|max:255',
        ]);
        Photo::upload($request->banner_image, 'files/banner', $request->banner_title);
        Banner::where('id', $id)->update([
            'banner_category' =>$request->banner_category,
            'banner_title' =>$request->banner_title,
            'banner_image' =>Photo::$name,
            'link' =>$request->link,
            'banner_description' =>$request->banner_description,
            'updated_at'=>Carbon::now(),
        ]);
        return back()->with('succ', 'Banner added...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
