<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){
        return view('admin.dashboard');
    }

    function welcome(){
        return view('admin.welcome');
    }
}
