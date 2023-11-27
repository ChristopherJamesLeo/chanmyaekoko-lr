<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collaborate;
use App\Models\Status;
use App\Models\Title;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CollaboratesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collaborates = Collaborate::all();
        $titles = Title::where("id",6)->get();
        return view("collaborates.index",compact("collaborates","titles"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            "image" => "required|mimes:jpg,jpeg,png"
        ]);
        $collaborate = new Collaborate();

        $collaborate -> name = $request["name"];
        $collaborate -> slug = Str::slug($request["name"]);

        if($request->hasfile("image")){
            $file = $request->file("image");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time().$filename;

            $file -> move(public_path("assets/imgs/gallery/"),$newfilename);

            $collaborate -> image = $newfilename;
        }

        $collaborate -> save();

        return redirect(route("collaborates.index"));
    }

    public function show(string $id)
    {
        return "Hello";
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $collaborate = Collaborate::findOrFail($id);

        $statuses = Status::all();

        return view("collaborates.edit",compact("collaborate"))->with("statuses",$statuses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $collaborate = Collaborate::findOrFail($id);

        $collaborate -> name = $request["name"];
        $collaborate -> status_id = $request["status_id"];
        $collaborate -> slug = Str::slug($request["name"]);

        $filepath = "assets/imgs/gallery/".$collaborate->image;

        if($request->hasFile("image")){

            if(File::exists($filepath)){
                File::delete($filepath);
            }

            $file = $request->file("image");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time().$filename;

            $file -> move(public_path("assets/imgs/gallery/"),$newfilename);

            $collaborate -> image = $newfilename;


        }

        $collaborate -> save();

        return redirect(route("collaborates.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $collaborate = Collaborate::findOrFail($id);

        $filepath = "assets/imgs/gallery/".$collaborate->image;

        if(File::exists($filepath)){
            File::delete($filepath);
        }

        $collaborate -> delete();

        return redirect()->back();
    }
}
