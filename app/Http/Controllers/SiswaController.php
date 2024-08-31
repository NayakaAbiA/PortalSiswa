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
    function add(){
        return view('add');
    }
}
