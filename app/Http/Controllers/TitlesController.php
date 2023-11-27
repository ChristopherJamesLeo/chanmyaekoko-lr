<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use App\Models\Title;

class TitlesController extends Controller
{
    public function index()
    {
        $titles = Title::all();

        return view("titles.index",compact("titles"));

    }

    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            "name" => "required",
            "subname" => "required"
        ]);

        $title = Title::findOrFail($id);

        $title -> name = $request["name"];

        $title -> subname = $request["subname"];

        if($request -> hasfile("image")){

            $filepath = "assets/imgs/banners/".$title->image;

            if(File::exists($filepath)){
                File::delete($filepath);
            }

            $file = $request -> file("image");

            $filename = $file -> getClientOriginalName();

            $newfilename = uniqid().time()."banner".$filename;

            $file -> move(public_path("assets/imgs/banners/"),$newfilename);

            $title -> image = $newfilename;
        }

        $title -> save();

        return redirect()->back();
    }
}
