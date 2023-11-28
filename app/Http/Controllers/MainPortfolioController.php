<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MainPortfolio;
use App\Models\Image;
use App\Models\Video;

class MainPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = MainPortfolio::orderBy("id","desc")->get();
        return view("mainportfolio.index",compact("portfolios"));
    }

    public function show(string $id)
    {
        $portfolio = MainPortfolio::findOrFail($id);
        $images = Image::where("taggable",$id)->where('imageable',"App\Models\Portfolio")->get();
        $videos =  Video::where("taggable",$id)->where('videoable',"App\Models\Portfolio")->get();

        return view("mainportfolio.read",compact("portfolio","images","videos"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
