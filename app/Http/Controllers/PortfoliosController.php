<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use App\Models\Image;
use App\Models\Video;
use App\Models\Portfolio;
use App\Models\Tag;
use App\Models\Type;
use App\Models\Status;


class PortfoliosController extends Controller
{

    public function index()
    {
        $portfolios = Portfolio::all();
        return view("portfolios.index",compact("portfolios"));
    }


    public function create()
    {
        $types = Type::all();
        return view("portfolios.create",compact("types"));
    }

    public function store(Request $request)
    {
        $this -> validate($request,[
            "name" => "required|unique:portfolios,name",
            "kind" => "required",
            "type" => "required",
            // "logo" => "required|image|mimes:jpg,jpeg,png|max:2048",
            // "images" => "image|mimes:jpg,jpeg,png|max:2048",
            "video" => "mimes:mp4,avi,mov,wmv|max:10240"
        ]);

        $portfolio = new Portfolio;
        
        $portfolio -> name = $request["name"];
        $portfolio -> kind = $request["kind"];
        $portfolio -> description = $request["description"];
        $portfolio -> slug = Str::slug($request["name"]);

        if($request->hasfile("logo")){

            $file = $request->file("logo");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time()."logo".$filename;

            $file -> move(public_path("assets/imgs/logos/"),$newfilename);

            $portfolio -> image = $newfilename;
        }

        $portfolio -> save();

        $getportfolio = Portfolio::latest('created_at')->first();


        $portfolioId = $getportfolio->id;

        $types = $request["type"];

        foreach($types as $type){

            Tag::create([
                "type_id" => $type,
                "taggable_id" => $portfolioId,
                "taggable_type" => "App\Models\Portfolio"
            ]);
        }

        if($request->hasfile('images')){
            $files = $request->file("images");

            foreach($files as $file){
                $filename = $file->getClientOriginalName();

                $newfilename = uniqid().time()."products".$filename;
                
                $file -> move(public_path("assets/imgs/products/"),$newfilename);

                Image::create([
                    "name" => $newfilename,
                    "taggable" => $portfolioId,
                    "imageable" => "App\Models\Portfolio"
                ]);
            }
        }

        if($request->hasfile("video")){
            $file = $request->file("video");
            
            $filename = $file -> getClientOriginalName();

            $newfilename = uniqid().time()."video".$filename;

            $file -> move(public_path("assets/videos/"),$newfilename);

            Video::create([
                "name" => $newfilename,
                "taggable" => $portfolioId,
                "videoable" => "App\Models\Portfolio"
            ]);
        }


        return redirect(route("portfolios.index"));

    }


    public function show(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $images = Image::where("taggable",$id)->get();

        $videos = Video::where("taggable",$id) -> get();

        return view("portfolios.show",compact("portfolio","images","videos"));
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
