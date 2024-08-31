<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsuController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'nis'=>'required',
            'password'=>'required'
        ],[
            'nis.required'=>'Username Wajib Diisi',
            'password.required'=>'Password Wajib Diisi'
        ]);
    $infologin = [
        'nis'=>$request->nis,
        'password'=>$request->password,
    ];
    if(Auth::attempt($infologin)){
        if(Auth::user()->role == 'admin'){
            return redirect('dashboard');
        }
        if(Auth::user()->role == 'siswa'){
            return redirect('dashboard/siswa');
        }
    } else{
        return redirect('')->withErrors('Username dan Password tidak sesuai')->withInput();
    }
    }
    function logout(){
        Auth::logout();
        return redirect('');
    }
}
