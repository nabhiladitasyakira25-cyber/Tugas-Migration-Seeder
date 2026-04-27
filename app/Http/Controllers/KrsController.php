<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function index()
    {
        $data = Krs::all();
        return view('krs.index', compact('data'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $matakuliah = Matakuliah::all();

        return view('krs.create', compact('mahasiswa', 'matakuliah'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required',
            'kode_matakuliah' => 'required'
        ]);

        Krs::create([
            'npm' => $request->npm,
            'kode_matakuliah' => $request->kode_matakuliah,
        ]);

        return redirect()->route('krs.index')->with('success', 'KRS berhasil ditambah');
    }
}