<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Link;
use App\Models\Status;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $links = Link::all();

        $statuses = Status::all();

        return view("links.index",compact("links","statuses"));

    }

    public function store(Request $request)
    {
        $this -> validate($request,[
            "name" => "required",
            "link" => "required"
        ]);

        $link = new Link();

        $link -> name = strtolower($request["name"]);

        $link -> link = $request["link"];

        $link -> save();

        return redirect(route("links.index"));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            "name" => "required",
            "link" => "required",
            "status_id" => "required"
        ]);

        $link = Link::findOrFail($id);

        $link -> name = strtolower($request["name"]);

        $link -> link = $request["link"];
        
        $link -> status_id = $request["status_id"];

        $link -> save();

        return redirect(route("links.index"));
    }

    public function destroy(string $id)
    {
        $link = Link::findOrFail($id);

        $link -> delete();

        return redirect() -> back();
    }
}
