<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Email;
use DB;

class EmailController extends Controller
{
    function getTampilEmail(){

        $dataParameter['pesan'] = "Halo selamat pagi teman-teman";
        $dataParameter['data'] = ['Model','Controller','View'];
        return view("tampil_email",$dataParameter);
    }

    function getViewEmail(){
        
        $query = DB::table('email')->get();
        
        $dataParameter['list_data'] = $query;

        return view("email",$dataParameter);
    }

    function getAddEmail(){
        return view('add_email');
    }

    function postAddEmail(){

        $validator = Validator::make(Request::all(),[
            'email' => 'required|min:5',
            'password' => 'required'
        ]);
        if ($validator->fails()){
            return redirect('email/add')
                ->withErrors($validator);
        }

        $email = Request::get('email');
        $password = Request::get('password');

        DB::table('email')->insert([
         'email' => $email,
         'password' => $password
    ]);
       
        return redirect('email');
    }

    function getViewEdit($id){
        
        $query = DB::table('email')->where('id',$id)->first();

        $dataParameter['email'] = Email::find($id);
        return view('edit_email',$dataParameter);
    }

    function postEditEmail(){
        $id = Request::get('id');
        $email = Request::get('email');
        $password = Request::get('password');
        
        DB::table('email')->where('id',$id)->update([
            'email' => $email,
            'password' => $password
        ]);
        
        return redirect('email');
    }

    function getDeleteEmail($id){
        DB::table('email')->where('id',$id)->delete();

        return redirect('email');
    }

    function setSession(){
        $id = Request::get('id');
        $email = Request::get('email');
        
        Session::put($id,$email);
            
        return 'done';

    }

    function getSession(){
        $id = Request::get('id');
        $email = Request::get('email');
        
        return 'Email dari id '.$id.' adalah : '.$email;
    }  


    
  
}
