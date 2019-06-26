<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $img='img/foto.jpg';
        return view("home")->with('foto',$img);
    }
}
