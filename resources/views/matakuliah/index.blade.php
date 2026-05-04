@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Halaman Matakuliah</h2>

<a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th width="200px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $mk)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mk->kode_matakuliah }}</td>
            <td>{{ $mk->nama_matakuliah }}</td>
            <td>{{ $mk->sks }}</td>
            <td>
                <a href="{{ route('matakuliah.show', $mk->kode_matakuliah) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('matakuliah.edit', $mk->kode_matakuliah) }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection