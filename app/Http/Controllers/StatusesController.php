<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusesController extends Controller
{
    public function index()
    {
        $statuses = Status::all();

        return view("statuses.index",compact("statuses"));

    }

    public function store(Request $request)
    {
        $this -> validate($request,[
            "name" => "required"
        ]);

        $status = new Status();

        $status -> name = $request["name"];

        $status -> save();

        return redirect(route("statuses.index"));
    }

    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            "name" => "required"
        ]);

        $status = Status::findOrFail($id);

        $status -> name = $request["name"];

        $status -> save();

        return redirect(route("statuses.index"));
    }

}
