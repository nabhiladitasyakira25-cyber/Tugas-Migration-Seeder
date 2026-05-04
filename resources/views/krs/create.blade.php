@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Tambah KRS</h2>

<form action="{{ route('krs.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">NPM</label>
        <input type="text" name="npm" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" name="kode_matakuliah" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('krs.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection