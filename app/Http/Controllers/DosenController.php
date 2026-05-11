<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::all();
        return view('dosen.index', compact('data'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|unique:dosen,nidn',
            'nama' => 'required'
        ]);

        Dosen::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan');
    }

    public function show($nidn)
    {
        $dosen = Dosen::where('nidn', $nidn)->firstOrFail();
        return view('dosen.show', compact('dosen'));
    }

    public function edit($nidn)
    {
        $dosen = Dosen::where('nidn', $nidn)->firstOrFail();
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $nidn)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required'
        ]);

        $dosen = Dosen::where('nidn', $nidn)->firstOrFail();

        $dosen->update([
            'nidn' => $request->nidn,
            'nama' => $request->nama
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diupdate');
    }

    public function destroy($nidn)
    {
        $dosen = Dosen::where('nidn', $nidn)->firstOrFail();
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus');
    }
}