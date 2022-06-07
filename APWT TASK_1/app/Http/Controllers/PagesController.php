<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function Home(){
        return view('home');
    }

    function Service(){

        $name = "Md. Saqib Rahman";
        $id="19-40399-1";
        $names=array("Full Face Helmets", "Flip Up Helmets",
        "Half Face Helmets" , "Trial Helmets", "Jet Helmets");

        return view('service')
        ->with('name', $name)
        ->with('id', $id)
        ->with('names', $names);
    }
    function Team(){
        return view('team');
    }
    function AboutUs(){
        return view('aboutUs');
    }
    function Contact(){
        return view('contact');
    }
}
