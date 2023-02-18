<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListApiController extends Controller
{
    function index(){
        return view('list-api');
    }
}
