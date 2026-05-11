<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $data = Jadwal::all();
        return view('jadwal.index', compact('data'));
    }

    public function create()
    {
        return view('jadwal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required',
            'nidn' => 'required',
            'kelas' => 'required',
            'hari' => 'required',
            'jam' => 'required'
        ]);

        Jadwal::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nidn' => $request->nidn,
            'kelas' => $request->kelas,
            'hari' => $request->hari,
            'jam' => $request->jam
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil ditambahkan');
    }

    public function show($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.show', compact('jadwal'));
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_matakuliah' => 'required',
            'nidn' => 'required',
            'kelas' => 'required',
            'hari' => 'required',
            'jam' => 'required'
        ]);

        $jadwal = Jadwal::findOrFail($id);

        $jadwal->update([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nidn' => $request->nidn,
            'kelas' => $request->kelas,
            'hari' => $request->hari,
            'jam' => $request->jam
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil diupdate');
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil dihapus');
    }
}