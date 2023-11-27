<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Title;


class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Education::all();
        $titles = Title::where("id",2)->get();
        return view("educations.index",compact("educations","titles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("educations.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $education = new Education();
        $user_id = Auth::user()->id;

        $education -> institude = $request["institude"];
        $education -> degree = $request["degree"];
        $education -> subject = $request["subject"];
        $education -> slug = Str::slug($request["institude"]);
        $education -> user_id = $user_id;

        $education -> save();

        return redirect(route("educations.index"));
    }

    public function edit(string $id)
    {
        $education = Education::findOrFail($id);

        $statuses = Status::all();

        return view("educations.edit",compact("education"))->with("statuses",$statuses);
    }

    public function update(Request $request, string $id)
    {
        $education = Education::findOrFail($id);
        $user_id = Auth::user()->id;

        $education -> institude = $request["institude"];
        $education -> degree = $request["degree"];
        $education -> subject = $request["subject"];
        $education -> status_id = $request["status_id"];
        $education -> slug = Str::slug($request["institude"]);
        $education -> user_id = $user_id;

        $education -> save();

        return redirect(route("educations.index"));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Education::findOrFail($id);

        $education -> delete();

        return redirect() -> back();
    }
}
