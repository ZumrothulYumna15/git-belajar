<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_user;

class UserDataControllers extends Controller
{
    public function user(){      
        $data = data_user::all();
        return view('data_user.user',['data'=>$data]);
     }

     public function input(){
        return view('data_user.input');     
     }

     public function store(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
     }
     

     

    
}
