<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Title;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::findOrFail(1);
        $titles = Title::where("id",1)->get();
        return view("abouts.index",compact("abouts","titles"));
    }

    public function update(Request $request, string $id)
    {
        $about = About::findOrFail($id);

        $about -> about = $request["about"];

        $about -> save();

        return redirect(route("abouts.index"));
    }


}
