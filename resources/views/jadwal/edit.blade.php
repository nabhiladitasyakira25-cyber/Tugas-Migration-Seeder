@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Edit Jadwal</h2>

<form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Kode Matakuliah</label>
        <input type="text" name="kode_matakuliah" value="{{ $jadwal->kode_matakuliah }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">NIDN</label>
        <input type="text" name="nidn" value="{{ $jadwal->nidn }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Kelas</label>
        <input type="text" name="kelas" value="{{ $jadwal->kelas }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Hari</label>
        <input type="text" name="hari" value="{{ $jadwal->hari }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Jam</label>
        <input type="time" name="jam" value="{{ $jadwal->jam }}" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection