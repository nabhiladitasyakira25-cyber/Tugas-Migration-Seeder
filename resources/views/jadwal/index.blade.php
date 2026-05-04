@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Halaman Jadwal</h2>

<a href="{{ route('jadwal.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Kode MK</th>
            <th>NIDN</th>
            <th>Kelas</th>
            <th>Hari</th>
            <th>Jam</th>
            <th width="200px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $j)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $j->kode_matakuliah }}</td>
            <td>{{ $j->nidn }}</td>
            <td>{{ $j->kelas }}</td>
            <td>{{ $j->hari }}</td>
            <td>{{ $j->jam }}</td>
            <td>
                <a href="{{ route('jadwal.show', $j->id) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('jadwal.edit', $j->id) }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection