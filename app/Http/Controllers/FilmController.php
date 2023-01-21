<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Support\Facades\Request;


class FilmController extends Controller
{
    function getTampilFilm(){

        $dataParameter['pesan'] = "Halo selamat pagi teman-teman";
        $dataParameter['data'] = ['Model','Controller','View'];
        return view("tampil_film",$dataParameter);
    }

    function getViewFilm(){
        $dataParameter['list_data'] = Film::all();

        return view("film",$dataParameter);
    }

    function getAddFilm(){
        return view('add_film');
    }

    function postAddFilm(){
       $judul = Request::get('judul');
       $keterangan = Request::get('keterangan');

       $film = new Film;
       $film->judul = $judul;
       $film->keterangan = $keterangan;
       $film->save();
    }
}
