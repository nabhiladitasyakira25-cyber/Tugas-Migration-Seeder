@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Tambah Dosen</h2>

<form action="{{ route('dosen.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">NIDN</label>
        <input type="text" name="nidn" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection