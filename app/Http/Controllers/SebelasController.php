<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SebelasController extends Controller
{
    public function index(){
        return view('layouts.main');
    }

    public function home(){
        return redirect('/');
    }

    public function gallery(){
        return view('layouts.gallery');
    }

    public function timA(){
        return view('tim.timA');
    }

    public function timB(){
        return view('tim.timB');
    }
}
