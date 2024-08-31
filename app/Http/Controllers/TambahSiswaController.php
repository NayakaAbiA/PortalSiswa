<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TambahSiswaController extends Controller
{
    public function index(){
        $siswa =Tugas::all();
        return view('admin.tugas', ['siswa' => $siswa]);
    }

    public function tambah_siswa(){
        return view('admin.tambah_siswa');
    }
   
    public function create(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nis' => 'required|unique:tugas,nis',
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'gambar_tugas' => 'nullable|mimes:jpg,png|max:2048', // 2MB max
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // dd($request->all());
        // Proses upload gambar
        {
            $gambar_tugas = $request->file('gambar_tugas');
            if ($gambar_tugas) {
                $filename = uniqid() . '-' . $gambar_tugas->getClientOriginalName();
                $path = $gambar_tugas->storeAs('gambar', $filename, 'public');
            } else {
                $filename = null;
            }
        }
        

        // Simpan data ke database
        Tugas::create([
            'nis' => $request->input('nis'),
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'jurusan' => $request->input('jurusan'),
            'gambar_tugas' => $filename,
        ]);

        return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan!');
    }
}
