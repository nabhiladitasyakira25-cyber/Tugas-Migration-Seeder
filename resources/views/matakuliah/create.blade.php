@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Tambah Matakuliah</h2>

<form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" name="kode_matakuliah" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Matakuliah</label>
        <input type="text" name="nama_matakuliah" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="number" name="sks" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection