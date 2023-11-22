<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowDashboardController extends Controller
{
    public function index(){
        return view("maindashboard.index");
    }
}
