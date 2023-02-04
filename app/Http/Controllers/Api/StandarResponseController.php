<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponse;

class StandarResponseController extends Controller
{
    use ApiResponse;

    public function list(Request $request){
        return $this->successData([
            'name' => 'Yumna'
        ]);      
    }
    public function success(Request $request){
        return $this->successResponse('Oke');      
    }
    public function requestBad(Request $request){
        return $this->badRequest('Salah nih');       
    }
    public function requestUnauthorized(Request $request){
        return $this->unauthorized('Login dulu bos');       
    }
}
