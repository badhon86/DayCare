<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Master;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $gsData = DB::table('homegallery')->get();
        return view ('assets.home', compact('gsData'));
        //return view ('assets.home');
    }

    public function save(Request $req)
    {
       // print_r($req->input());
        $contacts = new Master;
        $contacts->name= $req->name;
        $contacts->email=$req->email;
        $contacts->text=$req->text;
        $contacts->save();
    }
}
