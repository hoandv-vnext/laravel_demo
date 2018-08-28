<?php

namespace App\Http\Controllers;
use App\news;

use Illuminate\Http\Request;

class demoController extends Controller
{
    //
    public function index(){

        //$data=App\news::all();
        //print_r($data);
        $users=news::all();

        //return View('hoandemo');
        //return view("hoandemo")->with("users", $users);
        return view('hoandemo', ['users' => $users]);
        
    }

}
