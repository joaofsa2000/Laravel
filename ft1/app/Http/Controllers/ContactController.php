<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    function create()
    {
        $morada='Avenida Mário Brito (EN107), nº 3570 - Freixieiro, 4455-491 Perafita';
        return view('contact.create')->with("morada",$morada);
    }

    function store()
    {

    }
}
