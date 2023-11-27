<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Phone;
use App\Models\Status;
class PhonesController extends Controller
{

    public function index()
    {
        $phones = Phone::all();

        $statuses = Status::all();

        return view("phones.index",compact("phones","statuses"));

    }

    public function store(Request $request)
    {
        $this -> validate($request,[
            "name" => "required"
        ]);

        $phone = new Phone();

        $phone -> name = $request["name"];

        $phone -> save();

        return redirect(route("phones.index"));
    }

    public function update(Request $request, string $id)
    {
        $this -> validate($request,[
            "name" => "required",
            "status_id" => "required"
        ]);

        $phone = Phone::findOrFail($id);

        $phone -> name = $request["name"];
        $phone -> status_id = $request["status_id"];

        $phone -> save();

        return redirect(route("phones.index"));
    }

    public function destroy(string $id)
    {
        $phone = Phone::findOrFail($id);

        $phone -> delete();

        return redirect() -> back();
    }
}
