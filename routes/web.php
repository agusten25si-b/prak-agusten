<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MahasiswaController;


use App\Http\Controllers\MatakuliahController;
use PhpParser\Builder\Function_;


Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);


Route::get('/index/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/create', [MatakuliahController::class, 'create']);
Route::get('/matakuliah/store', [MatakuliahController::class, 'store']);
Route::get('/matakuliah/show/{param2?}', [MatakuliahController::class, 'show']);
Route::get('/matakuliah/edit/{param2}', [MatakuliahController::class, 'edit']);
Route::get('/matakuliah/update/{param2}', [MatakuliahController::class, 'update']);
Route::get('/matakuliah/delete/{param2}', [MatakuliahController::class, 'destroy']);


Route::get('/', function () {
    return view('welcome');
});


Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampis PCR!';
});


Route::get('/marel', function () {
    return 'Selamat Datang Marel';
});


Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});


Route::get('/{param1}/nama', function ($param1) {
    if ($param1 == 'marel') {
        return 'Selamat Datang Agusten';
    } else
        return 'Nama saya: '.$param1;
});


Route::get('/mahasiswa', function () {
    return 'Selamat Datang Mahasiswa';
});




Route::get('/about', function () {
    return view('halaman-about');
});


Route::get('/a', function () {
    return view('halaman-a');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);





