@extends('layouts.app')

@section('content')
<h2>Tambah KRS</h2>

<form action="{{ route('krs.store') }}" method="POST">
    @csrf

    <label>Mahasiswa</label><br>
    <select name="npm">
        @foreach($mahasiswa as $m)
            <option value="{{ $m->npm }}">
                {{ $m->npm }} - {{ $m->nama }}
            </option>
        @endforeach
    </select><br><br>

    <label>Matakuliah</label><br>
    <select name="kode_matakuliah">
        @foreach($matakuliah as $mk)
            <option value="{{ $mk->kode_matakuliah }}">
                {{ $mk->kode_matakuliah }} - {{ $mk->nama_matakuliah }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection