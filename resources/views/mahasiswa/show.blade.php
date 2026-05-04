@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Detail Mahasiswa</h2>

<table class="table table-bordered">
    <tr>
        <th>NPM</th>
        <td>{{ $mahasiswa->npm }}</td>
    </tr>
    <tr>
        <th>NIDN</th>
        <td>{{ $mahasiswa->nidn }}</td>
    </tr>
    <tr>
        <th>Nama</th>
        <td>{{ $mahasiswa->nama }}</td>
    </tr>
</table>

<a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
@endsection