<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Type;
use App\Models\Tag;
use App\Models\Status;

class TypesController extends Controller
{
    public function index()
    {
        $types = Type::all();


        return view("types.index",compact("types"));

    }

    public function store(Request $request)
    {
        $this -> validate($request,[
            "name" => "required"
        ]);

        $type = new Type();

        $type -> name = $request["name"];

        $type -> save();

        return redirect(route("types.index"));
    }

    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            "name" => "required"
        ]);

        $type = Type::findOrFail($id);

        $type -> name = $request["name"];

        $type -> save();

        return redirect(route("types.index"));
    }

    public function destroy(string $id)
    {
        $type = Type::findOrFail($id);

        $tags = Tag::where("type_id",$id)->get();

        foreach($tags as $tag){
            $tag -> delete();
        }

        $type -> delete();

        return redirect() -> back();
    }
}
