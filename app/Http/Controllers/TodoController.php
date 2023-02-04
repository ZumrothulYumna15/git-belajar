<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function add(){
       // Todo::create([
       // 'title' => 'Belajar Laravel',
       // 'deskripsi' => 'Harus bisa Laravel bulan ini',
       // 'tanggal' => '2022-11-12',
       // 'is_done' => false,
       // ]);

        $todo = new Todo();
        $todo->title = 'Belajar Laravel Eloquent';
        $todo->deskripsi = 'Harus bisa Laravel eloquent';
        $todo->tanggal = '2022-11-11';
        $todo->is_done = true;
        $todo->save();

        return 'todo berhasil dibuat';
    }

    public function edit(){
        //Todo::findOrFail(1)->update([
        //   'title'=>'Belajar Eloquent Laravel'
        //]);

        $todo = Todo::findOrFail(1);
        $todo->title = 'Laravel Edit Kedua';
        $todo->update();

        return 'edit_todo';
    }

    public function delete(){
        Todo::findOrFail(2)->delete();

        //$todo = Todo::findOrFail(2);
        //$todo->delete();

        return 'todo berhasil dihapus';
    }
}
