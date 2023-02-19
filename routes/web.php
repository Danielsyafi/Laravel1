<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/main', function () {
    return view('main',[
        "Nama" =>"Daniel syafik",
        "Role"=> "admin"
    ]);
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about',[
        "Nama_perusahaan" => "bagasJaya"
    ]);
});
Route::get('/daftar', function () {
    return view('daftar_karyawan1',
        [
            "Nama"=>"Daniel syafik",
            "umur"=>"20 tahun",
            "Alamat"=>"jln.pasar baru",
            "NO_Telp"=>"+62877611638",
        ]);
});
Route::get('/welcome', function () {
    return view('welcome');
});


