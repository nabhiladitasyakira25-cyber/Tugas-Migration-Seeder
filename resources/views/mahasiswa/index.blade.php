@extends('layouts.app')

@section('content')
<h2>Data Mahasiswa</h2>

<a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>NPM</th>
        <th>NIDN</th>
        <th>Nama</th>
    </tr>

    @foreach($data as $m)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $m->npm }}</td>
        <td>{{ $m->nidn }}</td>
        <td>{{ $m->nama }}</td>
    </tr>
    @endforeach
</table>
@endsection