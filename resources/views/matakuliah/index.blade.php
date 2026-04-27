@extends('layouts.app')

@section('content')
<h2>Data Matakuliah</h2>

<a href="{{ route('matakuliah.create') }}">Tambah Matakuliah</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>SKS</th>
    </tr>

    @foreach($data as $mk)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $mk->kode_matakuliah }}</td>
        <td>{{ $mk->nama_matakuliah }}</td>
        <td>{{ $mk->sks }}</td>
    </tr>
    @endforeach
</table>
@endsection