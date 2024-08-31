<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){
        return view('dashboard');
    }
    function profil(){
        return view('profil');
    }
    function jadwal(){
        return view('jadwal');
    }
    function materi(){
        return view('materi');
    }
<<<<<<< HEAD
    
=======
    function add(){
        return view('add');
    }
>>>>>>> a63ccf3dfc7b0cf074c8ae9f1cf4e64bf5f39e0f
}
