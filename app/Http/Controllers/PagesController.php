<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index(){
        $title = 'Home';
        return view('pages/home')->with('title',$title);
    }

    public function about(){
        $title = 'About';
        return view('pages/about')->with('title',$title);
    }

    public function shop(){
        $title = 'Shop';
        return view('pages/shop')->with('title',$title);
    }

    public function account(){
        $title = 'Account';
        return view('pages/account')->with('title',$title);
    }
}
