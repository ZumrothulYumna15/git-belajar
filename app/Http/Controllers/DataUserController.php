<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataUser;

class DataUserController extends Controller
{
    public function add(){
        $data_user = new DataUser();
        $data_user->nama = 'Wahyu';
        $data_user->email = 'wahyu3@gmail.com';
        $data_user->password = 'wahyuketiga';
        $data_user->save();

         return 'todo berhasil dibuat';
     }
 
     public function edit(){
        $data_user = DataUser::findOrFail(2);
        $data_user->password = 'FfIiZzIi';
        $data_user->update();

        return 'edit data user';       
     }
 
     public function delete(){
        DataUser::findOrFail(4)->delete();

        return 'data user berhasil dihapus';         
     }
}
