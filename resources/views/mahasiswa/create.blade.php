@extends('layouts.app')

@section('content')
<h2>Tambah Mahasiswa</h2>

<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf

    <label>NPM</label><br>
    <input type="text" name="npm"><br><br>

    <label>NIDN (Dosen Wali)</label><br>
    <input type="text" name="nidn"><br><br>

    <label>Nama</label><br>
    <input type="text" name="nama"><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection