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
        $types = Type::all();
        $statuses = Status::all();
        return view("portfolios.index",compact("portfolios","types","statuses"));
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
            // "logo" => "image|mimes:jpg,jpeg,png|max:2048",
            // "images" => "image|mimes:jpg,jpeg,png|max:2048",
            // "video" => "required|mimes:mp4,avi,mov,wmv|max:20480",
            "description" => "required"
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

        $portfolio = Portfolio::latest('created_at')->first();


        $portfolioId = $portfolio->id;




        $types = $request["type"];

        foreach($types as $type){
            // $tag -> type_id = $type;
            // $tag -> taggable_id = $portfolioId;
            // $tag -> taggable_type = "App\Models\Portfolio";

            Tag::create([
                "type_id" => $type,
                "taggable_id" => $portfolioId,
                "taggable_type" => "App\Models\Portfolio"
            ]);
        }
        return redirect(route("portfolios.index"));

    }


    public function show(string $id)
    {
        //
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
