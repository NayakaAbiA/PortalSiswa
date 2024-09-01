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

}
=======
    

    function add(){
        return view('add');
    }
}
>>>>>>> f85484a21c1a6d347e7167bab6435e89e8189b8a
