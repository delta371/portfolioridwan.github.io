<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    const VIEW_DIR = 'home';

    public function index(){
        return view('home.index');
    }
}
