<?php

namespace App\Http\Controllers;

use App\Models\karyawan1;
use Illuminate\Http\Request;


class karyawan1Controller extends Controller
{
     function index(){
        $Data=karyawan1::all();
    return view('layout.Data_karyawan',['Data'=> $Data]);
   }
}
