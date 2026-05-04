<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $data = Matakuliah::all();
        return view('matakuliah.index', compact('data'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|unique:matakuliah,kode_matakuliah',
            'nama_matakuliah' => 'required',
            'sks' => 'required|numeric'
        ]);

        Matakuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Data matakuliah berhasil ditambahkan');
    }

    public function show($kode_matakuliah)
    {
        $matakuliah = Matakuliah::where('kode_matakuliah', $kode_matakuliah)->firstOrFail();
        return view('matakuliah.show', compact('matakuliah'));
    }

    public function edit($kode_matakuliah)
    {
        $matakuliah = Matakuliah::where('kode_matakuliah', $kode_matakuliah)->firstOrFail();
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, $kode_matakuliah)
    {
        $request->validate([
            'kode_matakuliah' => 'required',
            'nama_matakuliah' => 'required',
            'sks' => 'required|numeric'
        ]);

        $matakuliah = Matakuliah::where('kode_matakuliah', $kode_matakuliah)->firstOrFail();

        $matakuliah->update([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks
        ]);

        return redirect()->route('matakuliah.index')->with('success', 'Data matakuliah berhasil diupdate');
    }
}