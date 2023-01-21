<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Musik;
use DB;

class MusikController extends Controller
{
    function getTampilMusik(){

        $dataParameter['pesan'] = "Halo selamat pagi teman-teman";
        $dataParameter['data'] = ['Model','Controller','View'];
        return view("tampil_musik",$dataParameter);
    }

    function getViewMusik(){
        
        $query = DB::table('musik')->get();
        
        $dataParameter['list_data'] = $query;

        return view("musik",$dataParameter);
    }

    function getAddMusik(){
        return view('add_musik');
    }

    function postAddMusik(){

        $validator = Validator::make(Request::all(),[
            'judul' => 'required|min:5',
            'keterangan' => 'required'
        ]);
        if ($validator->fails()){
            return redirect('musik/add')
                ->withErrors($validator);
        }

        $judul = Request::get('judul');
        $keterangan = Request::get('keterangan');

        DB::table('musik')->insert([
         'judul' => $judul,
         'keterangan' => $keterangan
    ]);
       
        return redirect('musik');
    }

    function getViewEdit($id){
        
        $query = DB::table('musik')->where('id',$id)->first();

        $dataParameter['musik'] = Musik::find($id);
        return view('edit_musik',$dataParameter);
    }

    function postEditMusik(){
        $id = Request::get('id');
        $judul = Request::get('judul');
        $keterangan = Request::get('keterangan');
        
        DB::table('musik')->where('id',$id)->update([
            'judul' => $judul,
            'keterangan' => $keterangan
        ]);
        
        return redirect('musik');
    }

    function getDeleteMusik($id){
        DB::table('musik')->where('id',$id)->delete();

        return redirect('musik');
    }
}
