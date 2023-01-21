<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMahasiswa;

class DataMahasiswaController extends Controller
{
   public function add(){
    $data_mahasiswa = new DataMahasiswa();
    $data_mahasiswa->nama = 'Putri Rara';
    $data_mahasiswa->nim = '123456';
    $data_mahasiswa->alamat = 'Jl.Cemara';
    $data_mahasiswa->program_studi = 'Teknik Informatika';
    $data_mahasiswa->semester = '2'; 
    $data_mahasiswa->save();
        
    return 'data mahasiswa berhasil dibuat';
   }

}


