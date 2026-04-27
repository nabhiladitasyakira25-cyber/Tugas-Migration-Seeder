@extends('layouts.app')

@section('content')
<h2>Data KRS</h2>

<a href="{{ route('krs.create') }}">Tambah KRS</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Kode Matakuliah</th>
    </tr>

    @foreach($data as $k)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $k->npm }}</td>
        <td>{{ $k->kode_matakuliah }}</td>
    </tr>
    @endforeach
</table>
@endsection