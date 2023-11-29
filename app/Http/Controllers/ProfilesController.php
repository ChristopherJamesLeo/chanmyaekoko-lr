<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use App\Models\Profile;



class ProfilesController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $profiles = Profile::where("id",$user_id)->get();


        return view("profiles.index",compact("profiles"));
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $profile = Profile::findOrFail($id);

        return view("profiles.edit",compact("profile"));
    }


    public function update(Request $request, string $id)
    {
        

        

        $profile = Profile::findOrFail($id);

        $profile -> name = $request["name"];

        $profile -> firstname = $request["firstname"];

        $profile -> email = $request["email"];

        $profile -> job = $request["job"];

        $profile -> address = $request["address"];

        if($request->hasfile("cv")){

            $this -> validate($request,[
                "cv" => "required|mimes:pdf|max:2048"
            ]);

            $filepath = "assets/files/".$profile->cv;

            if(File::exists($filepath)){
                File::delete($filepath);
            }

            $file = $request -> file("cv");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time()."cv".$filename;

            $file -> move(public_path("assets/files/"),$newfilename);

            $profile->cv = $newfilename;
        }

        if($request->hasfile("image")){

            $this -> validate($request,[
                "image" => "required|mimes:jpg,jpeg,png|max:2048"
            ]);

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
