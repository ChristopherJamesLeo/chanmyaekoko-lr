<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use App\Models\Video;

class VideosController extends Controller
{
    public function update(Request $request, string $id){


        $video = Video::findOrFail($id);

        $portfolioId = $video -> taggable;
       
        if($request->hasfile("video")){

            $this -> validate($request,[
                "video" => "mimes:mp4,avi,mov,wmv|max:10240"
            ]);

            $filepath = "assets/videos/".$video->name;

            if(File::exists($filepath)){
                File::delete($filepath);
            }

            $file = $request -> file("video");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time()."videos".$filename;

            $file -> move(public_path("assets/videos/"),$newfilename);

            $video->name = $newfilename;
        }

        $video -> save();

        return redirect(route("portfolios.show",$portfolioId));

    }

    public function destroy($id){
        $video = Video::findOrFail($id);

        $filepath = "assets/videos/".$video->name;

        if(File::exists($filepath)){
            File::delete("$filepath");
        }

        $video -> delete();

        return redirect() -> back();
    }
}
