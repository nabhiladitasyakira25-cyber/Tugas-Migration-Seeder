<?php

namespace App\Http\Controllers;

use App\Models\Krs;
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
        return view('krs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required',
            'kode_matakuliah' => 'required'
        ]);

        Krs::create([
            'npm' => $request->npm,
            'kode_matakuliah' => $request->kode_matakuliah
        ]);

        return redirect()->route('krs.index')->with('success', 'Data KRS berhasil ditambahkan');
    }

    public function show($id)
    {
        $krs = Krs::findOrFail($id);
        return view('krs.show', compact('krs'));
    }

    public function edit($id)
    {
        $krs = Krs::findOrFail($id);
        return view('krs.edit', compact('krs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'npm' => 'required',
            'kode_matakuliah' => 'required'
        ]);

        $krs = Krs::findOrFail($id);

        $krs->update([
            'npm' => $request->npm,
            'kode_matakuliah' => $request->kode_matakuliah
        ]);

        return redirect()->route('krs.index')->with('success', 'Data KRS berhasil diupdate');
    }

    public function destroy($id)
    {
        $krs = Krs::findOrFail($id);
        $krs->delete();

        return redirect()->route('krs.index')->with('success', 'Data KRS berhasil dihapus');
    }
}