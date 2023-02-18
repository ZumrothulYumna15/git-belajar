<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\DataMahasiswaBuilder;
use App\Http\Controllers\DataEmailController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\MusikController;
use App\Helpers\HelloWorld;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world',function(){
    return sayHello("Rara");
});

Route::get('/about-us' , [AboutUsController::class,'index']);

Route::controller(DataMahasiswaController::class)->group(function(){
    Route::get('/add-data_mahasiswa','add');  
});

Route::controller(DataMahasiswaBuilder::class)->group(function(){
    Route::get('/query/add-data_mahasiswa','add');
});

Route::get('/userdata', function () {
    return view ('user');
});

Route::get('/userdata/input',[UserDataControllers::class,'input']);
Route::post('/userdata/store',[UserDataControllers::class,'store']);


Route::get('/dataemail',[DataEmailController::class,'index']);
Route::get('/dataemail/input',[DataEmailController::class,'input']);
Route::post('/dataemail/store',[DataEmailController::class,'store']);
Route::get('dataemail/edit/{number}',[DataEmailController::class,'edit']);
Route::post('dataemail/update',[DataEmailController::class,'update']);

Route::get('/tampil-film',[FilmController::class,'getTampilFilm']);
Route::get('/film',[FilmController::class,'getViewFilm']);
Route::get('/film/add',[FilmController::class,'getAddFilm']);
Route::post('/film/add',[FilmController::class,'postAddFilm']);

Route::get('/tampil-musik',[MusikController::class,'getTampilMusik']);
Route::get(
    
    '/musik',
    [MusikController::class,'getViewMusik']

)->middleware('logging');
Route::get('/musik/add',[MusikController::class,'getAddMusik']);
Route::post('/musik/add',[MusikController::class,'postAddMusik']);
Route::get('/musik/edit/{id}',[MusikController::class,'getViewEdit']);
Route::post('/musik/edit',[MusikController::class,'postEditMusik']);
Route::get('/musik/delete/{id}',[MusikController::class,'getDeleteMusik']);


use App\Http\Controllers\EmailController;
Route::get('/tampil-email',[EmailController::class,'getTampilEmail']);
Route::get(
    
    '/email',
    [EmailController::class,'getViewEmail']

)->middleware('logging');
Route::get('/email/add',[EmailController::class,'getAddEmail']);
Route::post('/email/add',[EmailController::class,'postAddEmail']);
Route::get('/email/edit/{id}',[EmailController::class,'getViewEdit']);
Route::post('/email/edit',[EmailController::class,'postEditEmail']);
Route::get('/email/delete/{id}',[EmailController::class,'getDeleteEmail']);

Route::get('/set-session',[EmailController::class,'setSession']);
Route::get('/set-session',[EmailController::class,'getSession']);


Route::view('/layouts','page.home');
  
use Illuminate\Support\Facades\App;
Route::get('/lang/{lang}', function($lang){
    App::setlocale($lang);

    return __('message.artikel');

});

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Console\InsertCommand;

Route::get('/run-artisan',function(){
    $email = Artisan::call('insert:data',['--option'=>'insert']);
});
Route::get('/hash',function(){
    $email = Hash::make('123456');

    $check = Hash::check('123456', $email);
    dd($check);
    return $email;

});


use App\Http\Controllers\UploadFileController;
Route::controller(UploadFileController::class)->group(function(){
    Route::get('upload-file','index');
    Route::post('upload-file','store');
});

use App\Repositorys\MusikRepository;
Route::get('musik-repo',function(){
    return MusikRepository::allMusik();
});

Route::get('musik-repos',function(Request $request,MusikRepository $musikRepository){
    return $musikRepository->musik();
});

use App\Services\MusikService;
Route::get('musik-ser',function(){
    return MusikService::allMusik();
});


use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoBuilderController;
Route::controller(TodoController::class)->group(function(){
    Route::get('/add-todo','add');
    Route::get('/edit-todo','edit');
    Route::get('/delete-todo','delete');
});

Route::controller(TodoBuilderController::class)->group(function(){
    Route::get('/query/add-todo','add');
    Route::get('/query/edit-todo','edit');
    Route::get('/query/delete-todo','delete');
});

use App\Http\Controllers\DataUserController;
use App\Http\Controllers\DataUserBuilder;
Route::controller(DataUserController::class)->group(function(){
    Route::get('/add-data_user','add');
    Route::get('/edit-data_user','edit');
    Route::get('/delete-data_user','delete');
});


use App\Http\Controllers\ListApiController;
use App\Http\Controllers\ListTableController;
Route::get('/list-api', [ListApiController::class,'index']);
Route::get('/list-table', [ListTableController::class,'index']);





