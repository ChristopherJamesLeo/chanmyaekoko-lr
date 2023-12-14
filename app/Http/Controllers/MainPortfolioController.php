<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MainPortfolio;
use App\Models\Portfolio;
use App\Models\Type;
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

        // start related products
        $gettypes = Portfolio::findOrFail($id)->types;

        $relportfolios;

        foreach($gettypes as $gettype){
            $gettypeid = $gettype->id;

            $relportfolios = Type::findOrFail($gettypeid)->typeable; 

        }

        // end related products
        return view("mainportfolio.read",compact("portfolio","images","videos","relportfolios"));
    }

}
