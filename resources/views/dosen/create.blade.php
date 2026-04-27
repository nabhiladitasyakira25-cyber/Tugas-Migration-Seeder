@extends('layouts.app')

@section('content')
<h2>Tambah Dosen</h2>

<form action="{{ route('dosen.store') }}" method="POST">
    @csrf

    <label>NIDN</label><br>
    <input type="text" name="nidn"><br><br>

    <label>Nama</label><br>
    <input type="text" name="nama"><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection