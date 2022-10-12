<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function about(){
        return view('pages/about');
    }
    public function waitlist(){
        return view('pages/waitlist');
    }
    public function offers(){
        return view('pages/offers');
    }
    
}
