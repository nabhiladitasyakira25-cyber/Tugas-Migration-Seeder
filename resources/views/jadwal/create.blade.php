@extends('layouts.app')

@section('content')
<h2>Tambah Jadwal</h2>

<form action="{{ route('jadwal.store') }}" method="POST">
    @csrf

    <label>Matakuliah</label><br>
    <select name="kode_matakuliah">
        @foreach($matakuliah as $mk)
            <option value="{{ $mk->kode_matakuliah }}">
                {{ $mk->kode_matakuliah }} - {{ $mk->nama_matakuliah }}
            </option>
        @endforeach
    </select><br><br>

    <label>Dosen</label><br>
    <select name="nidn">
        @foreach($dosen as $d)
            <option value="{{ $d->nidn }}">
                {{ $d->nidn }} - {{ $d->nama }}
            </option>
        @endforeach
    </select><br><br>

    <label>Kelas</label><br>
    <input type="text" name="kelas"><br><br>

    <label>Hari</label><br>
    <input type="text" name="hari"><br><br>

    <label>Jam</label><br>
    <input type="time" name="jam"><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection