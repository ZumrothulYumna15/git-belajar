<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;
use App\Models\DataUser;

class CrudDataUserController extends Controller
{
    use ApiResponse;

    function list(Request $request){
        $listAllDataUser = DataUser::latest('id')
        ->select(['id','nama','email','password'])
        ->get();

        return $this->successData($listAllDataUser);
    }

    function detail(Request $request,$id){
        $findDataUser = DataUser::findOrFail($id);
        return $this->successData($findDataUser);    
    }

    function create(Request $request){
        DataUser::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        
        return $this->successResponse('Data user berhasil dibuat');
    }

    function update(Request $request,$id){  
       DataUser::findOrFail($id)->update([
        'nama' => $request->nama,
        'email' => $request->email,
        'password' => $request->password,
        ]);

        return $this->successResponse('Data user berhasil diperbarui');
    }

    function delete(Request $request,$id){
        DataUser::findOrFail($id)->delete();

        return $this->successResponse('Data user berhasil dihapus');   
    }   
}
