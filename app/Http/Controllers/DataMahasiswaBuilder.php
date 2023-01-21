<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataMahasiswaBuilder extends Controller
{
   public function add(){
    DB::table('data_mahasiswa')->insert([
        'nama' => 'Aisya',
        'nim' => '789012',
        'alamat' => 'Jl. Merbau',
        'program_studi' => 'Teknik Informatika',
        'semester' => '2',    
    ]);

    return 'data siswa berhasil disimpan';
   }
   
}
