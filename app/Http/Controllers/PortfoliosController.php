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
            "description" => "required",
            "logo" => "required|image|mimes:jpg,jpeg,png|max:2048",
            "images.*" => "image|mimes:jpg,jpeg,png|max:2048",
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

        $tags = Tag::where("taggable_id",$id)->get();

        $typename = "";

        foreach($tags as $tag){
            $tag -> type_id;

            $types = Type::where("id",$tag->type_id)->get();
            
            // echo $types;
            foreach($types as $type){
                // echo $type -> name;
                $typename .= $type -> name." / ";
            }

            
            
        }


        

        $images = Image::where("taggable",$id)->get();

        $videos = Video::where("taggable",$id) -> get();

        return view("portfolios.show",compact("portfolio","images","videos","typename"));
    }


    public function edit(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $statuses = Status::all();

        $types = Type::all();

        $tags = Tag::where("taggable_id",$id)->get();

        $typename = "";

        foreach($tags as $tag){
            $tag -> type_id;

            $types = Type::where("id",$tag->type_id)->get();
            
            foreach($types as $type){
                $typename .= $type -> name." / ";
            }

        }

        $images = Image::where("taggable",$id)->get();

        $videos = Video::where("taggable",$id) -> get();

        return view("portfolios.edit",compact("portfolio","images","videos","types","statuses","typename"));

    }


    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            "name" => "required|unique:portfolios,name,".$id,
            "kind" => "required",
            "description" => "required",
            "logo" => "image|mimes:jpg,jpeg,png|max:2048",
            "images.*" => "image|mimes:jpg,jpeg,png|max:2048",
            "video" => "mimes:mp4,avi,mov,wmv|max:10240"
        ]);

        $portfolio = Portfolio::findOrFail($id);
        
        $portfolio -> name = $request["name"];
        $portfolio -> kind = $request["kind"];
        $portfolio -> status_id = $request["status_id"];
        $portfolio -> description = $request["description"];
        $portfolio -> slug = Str::slug($request["name"]);

        if($request->hasfile("logo")){

            $filepath = "assets/imgs/logos/". $portfolio->image;

            if(File::exists($filepath)){
                File::delete($filepath);
            }

            $file = $request->file("logo");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time()."logo".$filename;

            $file -> move(public_path("assets/imgs/logos/"),$newfilename);

            $portfolio -> image = $newfilename;
        }

        $portfolio -> save();

        $types = $request["type"];

        if($types){
            $tags = Tag::where("taggable_id",$id)->get();

            foreach($tags as $tag){
                $tag -> delete();
            }

            foreach($types as $type){
                Tag::create([
                    "type_id" => $type,
                    "taggable_id" => $id,
                    "taggable_type" => "App\Models\Portfolio"
                ]);
            }
        }
        


        if($request->hasfile('images')){

            $images = Image::where("taggable",$id)->get();

            foreach($images as $image){
                $filepath = "assets/imgs/products/".$image->name;

                if(File::exists($filepath)){
                    File::delete($filepath);
                }

                $image->delete();
            }

            $files = $request->file("images");

            foreach($files as $file){
                $filename = $file->getClientOriginalName();

                $newfilename = uniqid().time()."products".$filename;
                
                $file -> move(public_path("assets/imgs/products/"),$newfilename);

                Image::create([
                    "name" => $newfilename,
                    "taggable" => $id,
                    "imageable" => "App\Models\Portfolio"
                ]);
            }
        }
        



        if($request->hasfile("video")){

            $file = $request->file("video");
                
            $filename = $file -> getClientOriginalName();
            
            $newfilename = uniqid().time()."video".$filename;

            $file -> move(public_path("assets/videos/"),$newfilename);

            $video = Video::where("taggable",$id)->get();


            if(count($video) === 0){
                Video::create([
                    "name" => $newfilename,
                    "taggable" => $id,
                    "videoable" => "App\Models\Portfolio"
                ]);

            }else {

                $filepath = "assets/videos/".$video -> name;

                if(File::exists($filepath)){
                    File::delete($filepath);
                }

                $video -> name = $newfilename;

                $video -> taggable = $id;

                $video -> videoable = "App\Models\Portfolio";

                $video -> save();
            }

        }

        return redirect(route("portfolios.show",$id));
    }


    public function destroy(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $filepath = "assets/imgs/logos/". $portfolio->image;

        if(File::exists($filepath)){
            File::delete($filepath);
        }

        $portfolio->delete();

        $tags = Tag::where("taggable_id",$id)->get();

        foreach($tags as $tag){
            $tag -> delete();
        }

        $images = Image::where("taggable",$id)->get();
        foreach($images as $image){

            $filepath = "assets/imgs/products/".$image->name;

            if(File::exists($filepath)){

                File::delete($filepath);

            }

            $image->delete();

        }


        $videos = Video::where("taggable",$id)->get();

        if(count($videos) > 0){
            foreach($videos as $video){
                $filepath = "assets/videos/".$video -> name;

                if(File::exists($filepath)){
                    File::delete($filepath);
                }
        
                $video -> delete();
            }

        }

        return redirect(route("portfolios.index"));
    }
}
