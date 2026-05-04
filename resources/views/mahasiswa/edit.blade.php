@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Edit Mahasiswa</h2>

<form action="{{ route('mahasiswa.update', $mahasiswa->npm) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">NPM</label>
        <input type="text" name="npm" value="{{ $mahasiswa->npm }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">NIDN</label>
        <input type="text" name="nidn" value="{{ $mahasiswa->nidn }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection