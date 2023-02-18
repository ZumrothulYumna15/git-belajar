<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListTableController extends Controller
{
    function index(){
        return view('list-table');
    }
}
