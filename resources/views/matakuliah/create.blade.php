@extends('layouts.app')

@section('content')
<h2>Tambah Matakuliah</h2>

<form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf

    <label>Kode Matakuliah</label><br>
    <input type="text" name="kode_matakuliah"><br><br>

    <label>Nama Matakuliah</label><br>
    <input type="text" name="nama_matakuliah"><br><br>

    <label>SKS</label><br>
    <input type="number" name="sks"><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection