<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectionController extends Controller
{
    function elections(Request $request){
        return view("elections");
    }
}
