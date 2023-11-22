<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edition;

use Illuminate\Support\Facades\File;

class EditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editions = Edition::all();
        return view("editions.index",compact("editions"));
    }

    public function store(Request $request)
    {
        $this -> validate($request,[
            "name" => "required|mimes:mp4,avi,mov,wmv|max:10240"
        ]);

        $edition = new Edition();

        if($request->hasFile("name")){
            $file = $request->file("name");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time().$filename;

            $file -> move(public_path("assets/videos/"),$newfilename);

            $edition -> name = $newfilename;

            $edition -> save();
        }

        return redirect(route("editions.index"));

    }


    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            "name" => "required|mimes:mp4,avi,mov,wmv|max:10240"
        ]);

        $edition = Edition::findOrFail($id);

        if($request->hasFile("name")){
            $name = $edition->name;

            $filepath = "assets/videos/".$name;
            if(File::exists($filepath)){
                File::delete($filepath);
            }
            $file = $request->file("name");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time().$filename;

            $file -> move(public_path("assets/videos/"),$newfilename);

            $edition -> name = $newfilename;

            $edition -> save();
        }

        return redirect(route("editions.index"));
    }

}
