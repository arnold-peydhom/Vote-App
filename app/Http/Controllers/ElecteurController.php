<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    function electeurs(){
        return view("electeurs");
    }
}
