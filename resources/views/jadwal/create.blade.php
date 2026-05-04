@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Tambah Jadwal</h2>

<form action="{{ route('jadwal.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" name="kode_matakuliah" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">NIDN</label>
        <input type="text" name="nidn" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Kelas</label>
        <input type="text" name="kelas" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Hari</label>
        <input type="text" name="hari" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Jam</label>
        <input type="time" name="jam" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection