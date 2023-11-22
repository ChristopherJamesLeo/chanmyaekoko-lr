<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Experience;
use App\Models\Status;

class ExperiencesController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();

        return view("experiences.index",compact("experiences"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("experiences.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $experience = new Experience();

        $experience -> company = $request["company"];
        $experience -> position = $request["position"];
        $experience -> duration = $request["duration"];
        $experience -> description = $request["description"];
        $experience -> slug = Str::slug($request["company"]);

        $experience -> save();

        return redirect(route("experiences.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $experience = Experience::findOrFail($id);

        $statuses = Status::all();

        return view("experiences.edit",compact("experience"))->with("statuses",$statuses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $experience = Experience::findOrFail($id);

        $experience -> company = $request["company"];
        $experience -> position = $request["position"];
        $experience -> duration = $request["duration"];
        $experience -> description = $request["description"];
        $experience -> slug = Str::slug($request["company"]);
        $experience -> status_id = $request["status_id"];

        $experience -> save();

        return redirect(route("experiences.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experience = Experience::findOrFail($id);

        $experience -> delete();

        return redirect()->back();
    }
}
