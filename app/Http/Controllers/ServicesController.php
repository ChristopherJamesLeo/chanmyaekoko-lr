<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

use App\Models\Service;
use App\Models\Status;
use App\Models\Title;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        $statuses = Status::all();
        $titles = Title::where("id",5)->get();
        return view("services.index",compact("services","statuses","titles"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            "image" => "required|mimes:jpg,jpeg,png"
        ]);
        $service = new Service();

        $service -> name = $request["name"];
        $service -> slug = Str::slug($request["name"]);

        if($request->hasfile("image")){
            
            $file = $request->file("image");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time().$filename;

            $file -> move(public_path("assets/imgs/icons/"),$newfilename);

            $service -> image = $newfilename;
        }

        $service -> save();

        return redirect(route("services.index"));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = service::findOrFail($id);

        $statuses = Status::all();

        return view("services.edit",compact("service"))->with("statuses",$statuses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $service = Service::findOrFail($id);

        $service -> name = $request["name"];
        $service -> status_id = $request["status_id"];
        $service -> slug = Str::slug($request["name"]);


        $filepath = "assets/imgs/icons/".$service->image;

        

        if($request->hasFile("image")){

            if(File::exists($filepath)){
                File::delete($filepath);
            }

            $file = $request->file("image");

            $filename = $file->getClientOriginalName();

            $newfilename = uniqid().time().$filename;

            $file -> move(public_path("assets/imgs/icons/"),$newfilename);

            $service -> image = $newfilename;


        }

        $service -> save();

        return redirect(route("services.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::findOrFail($id);

        $filepath = "assets/imgs/icons/".$service->image;

        if(File::exists($filepath)){
            File::delete($filepath);
        }

        $service -> delete();

        return redirect()->back();
    }
}
