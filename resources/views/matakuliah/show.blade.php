@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Detail Matakuliah</h2>

<table class="table table-bordered">
    <tr>
        <th>Kode Matakuliah</th>
        <td>{{ $matakuliah->kode_matakuliah }}</td>
    </tr>
    <tr>
        <th>Nama Matakuliah</th>
        <td>{{ $matakuliah->nama_matakuliah }}</td>
    </tr>
    <tr>
        <th>SKS</th>
        <td>{{ $matakuliah->sks }}</td>
    </tr>
</table>

<a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
@endsection