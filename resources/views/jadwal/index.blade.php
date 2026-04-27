@extends('layouts.app')

@section('content')
<h2>Data Jadwal</h2>

<a href="{{ route('jadwal.create') }}">Tambah Jadwal</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Kode MK</th>
        <th>NIDN</th>
        <th>Kelas</th>
        <th>Hari</th>
        <th>Jam</th>
    </tr>

    @foreach($data as $j)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $j->kode_matakuliah }}</td>
        <td>{{ $j->nidn }}</td>
        <td>{{ $j->kelas }}</td>
        <td>{{ $j->hari }}</td>
        <td>{{ $j->jam }}</td>
    </tr>
    @endforeach
</table>
@endsection