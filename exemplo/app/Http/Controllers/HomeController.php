<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $nome = request()->get("nome");
        return view("home")->with("nome", $nome);
    }
}
