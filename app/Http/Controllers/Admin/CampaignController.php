<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Photo;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = Campaign::all();
        return view('backend.campaign.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.campaign.create_campaign');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'campaign_name'     => 'required|max:255',
            'campaign_image'    => 'required',
            'image_type'        => 'required',
        ]);

        $size = null;

        if ($request->image_type == 'horizontal') {
            Photo::upload($request->campaign_image, 'files/campaign', $request->campaign_name,[966,542]);
        }elseif ($request->image_type == 'vertical') {
            Photo::upload($request->campaign_image, 'files/campaign', $request->campaign_name,[600,712]);
        }
        Campaign::insert([
            'campaign_for'      => $request->campaign_for,
            'campaign_name'     => $request->campaign_name,
            'campaign_image'    => Photo::$name,
            'image_type'        => $request->image_type,
            'percentage'        => $request->percentage,
            'start'             => $request->start,
            'end'               => $request->end,
            'created_at'        => Carbon::now(),
        ]);
        return back()->with('succ', 'Campaign added...');
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
        $request = Campaign::find($id);

        return view('backend.campaign.campaign_edit', compact('request'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'campaign_name' => 'required|max:255',
        ]);

        Photo::upload($request->campaign_image, 'files/campaign', $request->campaign_name);
        Campaign::where('id', $id)->update([
            'campaign_for'      => $request->campaign_for,
            'campaign_name'     => $request->campaign_name,
            'campaign_image'    => Photo::$name,
            'image_type'        => $request->image_type,
            'percentage'        => $request->percentage,
            'start'             => $request->start,
            'end'               => $request->end,
            'created_at'        => Carbon::now(),
        ]);
        return back()->with('succ', 'Campaign Updated...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
