<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getHome(){
        return view('template');
    }
    public function getAbout(){
        return view('about');
    }
    public function getContact(){
        return view('contact');
    }
}
