<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;
use App\Models\Todo;

class CrudTodoController extends Controller
{
    use ApiResponse;

    function list(Request $request){
        $listAllTodo = Todo::latest('id')
        ->select(['id','title','deskripsi','tanggal','is_done'])
        ->get();

        return $this->successData($listAllTodo);
    }

    function detail(Request $request,$id){
        $findTodo = Todo::findOrFail($id);
        return $this->successData($findTodo);    
    }

    function create(Request $request){
        Todo::create([
            'tittle' => $request->title,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'is_done' => $request->is_done,
        ]);
        
        return $this->successResponse('Todo berhasil dibuat');
    }

    function update(Request $request,$id){  
       Todo::findOrFail($id)->update([
            'tittle' => $request->title,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
            'is_done' => $request->is_done,
        ]);

        return $this->successResponse('Todo berhasil diperbarui');
    }

    function delete(Request $request,$id){
        Todo::findOrFail($id)->delete();

        return $this->successResponse('Todo berhasil dihapus');   
    }
}
