@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Edit KRS</h2>

<form action="{{ route('krs.update', $krs->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">NPM</label>
        <input type="text" name="npm" value="{{ $krs->npm }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" name="kode_matakuliah" value="{{ $krs->kode_matakuliah }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('krs.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection