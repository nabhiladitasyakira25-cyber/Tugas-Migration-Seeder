@extends('layouts.app')

@section('content')
<h2>Data Dosen</h2>

<a href="{{ route('dosen.create') }}">Tambah Dosen</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
    </tr>

    @foreach($data as $d)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $d->nidn }}</td>
        <td>{{ $d->nama }}</td>
    </tr>
    @endforeach
</table>
@endsection