<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Profile;

class ProfileImageController extends Controller
{
    public function update(Request $request, string $id)
    {

        $this -> validate($request,[
            "image" => "required|mimes:jpg,jpeg,png|max:2048"
        ]);

        $profile = Profile::findOrFail($id);

        if($request->hasfile("image")){

            $filepath = "assets/imgs/profiles/".$profile->image;

            if(File::exists($filepath)){
                File::delete($filepath);
            }

            $file = $request -> file("image");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time()."profile".$filename;

            $file -> move(public_path("assets/imgs/profiles/"),$newfilename);

            $profile->image = $newfilename;
        }
        $profile -> save();

        return redirect(route("profiles.index"));
    }
}
