@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Edit Dosen</h2>

<form action="{{ route('dosen.update', $dosen->nidn) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">NIDN</label>
        <input type="text" name="nidn" value="{{ $dosen->nidn }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" value="{{ $dosen->nama }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection