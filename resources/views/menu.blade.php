@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Menu Utama</h2>

<div class="list-group mt-3">
    <a href="/dosen" class="list-group-item list-group-item-action">Data Dosen</a>
    <a href="/mahasiswa" class="list-group-item list-group-item-action">Data Mahasiswa</a>
    <a href="/matakuliah" class="list-group-item list-group-item-action">Data Matakuliah</a>
    <a href="/jadwal" class="list-group-item list-group-item-action">Data Jadwal</a>
    <a href="/krs" class="list-group-item list-group-item-action">Data KRS</a>
</div>
@endsection