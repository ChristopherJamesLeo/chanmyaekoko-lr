<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Profile;

class LoginController extends Controller
{
    public function index()
    {
        return view("logins.index");
    }

    public function update(Request $request, string $id)
    {

        $profile = Profile::findOrFail($id);

        $profile -> email = $request["email"];

        $profile -> password = Hash::make($request->input("conpassword"));
        // $profile -> password = $request["conpassword"];

        $profile -> save();

        return redirect(route("logins.index"));
    }

}
