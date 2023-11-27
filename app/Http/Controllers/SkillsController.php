<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Skill;
use App\Models\Status;
use App\Models\Title;

class SkillsController extends Controller
{

    public function index()
    {
        $skills = Skill::all();
        $titles = Title::where("id",3)->get();
        
        return view("skills.index",compact("skills","titles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("skills.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $skill = new Skill();

        $skill -> subject = $request["subject"];
        $skill -> type = $request["type"];
        $skill -> level = $request["level"];
        $skill -> slug = Str::slug($request["subject"]);

        $skill -> save();

        return redirect(route("skills.index"));
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
        $skill = Skill::findOrFail($id);

        $statuses = Status::all();

        return view("skills.edit",compact("skill"))->with("statuses",$statuses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skill = Skill::findOrFail($id);

        $skill -> subject = $request["subject"];
        $skill -> type = $request["type"];
        $skill -> level = $request["level"];
        $skill -> slug = Str::slug($request["type"]);
        $skill -> status_id = $request["status_id"];

        $skill -> save();

        return redirect(route("skills.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = Skill::findOrFail($id);

        $skill -> delete();

        return redirect()->back();
    }
}
