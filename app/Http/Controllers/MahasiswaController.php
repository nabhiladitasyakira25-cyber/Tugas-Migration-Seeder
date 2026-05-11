<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|unique:mahasiswa,npm',
            'nidn' => 'required',
            'nama' => 'required'
        ]);

        Mahasiswa::create([
            'npm' => $request->npm,
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    public function show($npm)
    {
        $mahasiswa = Mahasiswa::where('npm', $npm)->firstOrFail();
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($npm)
    {
        $mahasiswa = Mahasiswa::where('npm', $npm)->firstOrFail();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $npm)
    {
        $request->validate([
            'npm' => 'required',
            'nidn' => 'required',
            'nama' => 'required'
        ]);

        $mahasiswa = Mahasiswa::where('npm', $npm)->firstOrFail();

        $mahasiswa->update([
            'npm' => $request->npm,
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diupdate');
    }

    public function destroy($npm)
    {
        $mahasiswa = Mahasiswa::where('npm', $npm)->firstOrFail();
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}