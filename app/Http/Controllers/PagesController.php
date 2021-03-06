<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function experience(){
        return view('experience');
    }

    public function education(){
        return view('education');
    }

    public function skills(){
        return view('skills');
    }

    public function interests(){
        return view('interests');
    }

    public function awards(){
        return view('awards');
    }

}
