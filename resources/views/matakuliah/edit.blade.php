@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Edit Matakuliah</h2>

<form action="{{ route('matakuliah.update', $matakuliah->kode_matakuliah) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" name="kode_matakuliah" value="{{ $matakuliah->kode_matakuliah }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Matakuliah</label>
        <input type="text" name="nama_matakuliah" value="{{ $matakuliah->nama_matakuliah }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="number" name="sks" value="{{ $matakuliah->sks }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection