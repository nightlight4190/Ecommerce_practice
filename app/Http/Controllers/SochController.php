<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SochController extends Controller
{
    public function getHome(){
        return view('template');

    }

    public function getAbout(){
        return view('about');

    }

    public function getServices(){
        return view('services');

    }

    public function getGallery(){
        return view('gallery');

    }

    public function getContact(){
        return view('contact');

    }





}