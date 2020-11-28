<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $gsData = DB::table('homegallery')->get();
        return view ('assets.home', compact('gsData'));
        //return view ('assets.home');
    }
}
