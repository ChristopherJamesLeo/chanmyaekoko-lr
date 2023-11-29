<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Image;

class ImagesController extends Controller
{
    public function update(Request $request, string $id){
        $image = Image::findOrFail($id);

        $portfolioId = $image -> taggable;
       
        if($request->hasfile("image")){


            $this -> validate($request,[
                "image" => "required|mimes:jpg,jpeg,png|max:2048"
            ]);

            $filepath = "assets/imgs/products/".$image->name;

            if(File::exists($filepath)){
                File::delete($filepath);
            }

            $file = $request -> file("image");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time()."products".$filename;

            $file -> move(public_path("assets/imgs/products/"),$newfilename);

            $image->name = $newfilename;
        }

        $image -> save();

        return redirect(route("portfolios.show",$portfolioId));

    }

    public function destroy($id){
        $image = Image::findOrFail($id);

        $filepath = "assets/imgs/products/".$image->name;

        if(File::exists($filepath)){
            File::delete("$filepath");
        }

        $image -> delete();

        return redirect() -> back();
    }
}
