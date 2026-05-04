@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Detail Jadwal</h2>

<table class="table table-bordered">
    <tr>
        <th>Kode Matakuliah</th>
        <td>{{ $jadwal->kode_matakuliah }}</td>
    </tr>
    <tr>
        <th>NIDN</th>
        <td>{{ $jadwal->nidn }}</td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td>{{ $jadwal->kelas }}</td>
    </tr>
    <tr>
        <th>Hari</th>
        <td>{{ $jadwal->hari }}</td>
    </tr>
    <tr>
        <th>Jam</th>
        <td>{{ $jadwal->jam }}</td>
    </tr>
</table>

<a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Kembali</a>
@endsection