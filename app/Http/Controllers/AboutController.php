<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::findOrFail(1);
        return view("abouts.index",compact("abouts"));
    }

    public function update(Request $request, string $id)
    {
        $about = About::findOrFail($id);

        $about -> about = $request["about"];

        $about -> save();

        return redirect(route("abouts.index"));
    }


}
