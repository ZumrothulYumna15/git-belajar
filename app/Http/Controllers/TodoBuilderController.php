<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoBuilderController extends Controller
{
    public function add(){

        DB::table('todos')->insert([
            'title' => 'Laravel Query Builder',
            'deskripsi' => 'Belajar Laravel Query Builder',
            'tanggal' => '2022-11-13',
            'is_done' => false
        ]);

        return 'todo berhasil disimpan';
    }

    public function edit(){
        DB::table('todos')->where('id',5)->update([
            'title' => 'Laravel query builder'
        ]);

        return 'todo berhasil diedit';
    }

    public function delete(){
        DB::table('todos')->where('id',5)->delete();

        return 'todo berhasil dihapus';
    }
}
