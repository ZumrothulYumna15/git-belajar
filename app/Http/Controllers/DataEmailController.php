<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataEmail;
use App\Http\Controllers\Validator;


class DataEmailController extends Controller
{
   public function index(){
    $data = DataEmail::all();
    return view('dataemail.index',['data'=>$data]);
   }
   public function input(){
    return view('dataemail.input');
   }
   public function store(Request $request){

    $request->validate([
      'email'=>'required',
      'password'=>'required'
     ]);

     $data_email = new DataEmail;
     $data_email->email = $request->email;
     $data_email->password = $request->password;
     if($data_email->save()){
      return redirect('dataemail/input/')->with('status','Data email berhasil dikirim');
     }
     else{
      return redirect('dataemail/input/')->with('status','Data email gagal dikirim');
     }
   }
    public function edit($id){
     $data_email = DataEmail::find($id);
     return view('dataemail.edit',['data'=>$data_email]);
     }

    public function update(Request $request){
      $request->validate([
        'email'=>'required',
        'password'=>'required'
      ]);
      
      $data_email = DataEmail::find($request->id);
      $data_email->email = $request->email;
      $data_email->password = $request->password;
      if($data_email->save()){
        return redirect('dataemail/edit/'.$request->id)->with('status','Data email berhasil dirubah');
      }else
        return redirect('dataemail/edit/'.$request->id)->with('status','Data email gagal dirubah');

    }



   
}
