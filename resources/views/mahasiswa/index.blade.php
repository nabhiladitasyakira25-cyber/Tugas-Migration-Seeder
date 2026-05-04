@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Halaman Mahasiswa</h2>

<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th width="200px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $m)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $m->npm }}</td>
            <td>{{ $m->nidn }}</td>
            <td>{{ $m->nama }}</td>
            <td>
                <a href="{{ route('mahasiswa.show', $m->npm) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('mahasiswa.edit', $m->npm) }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection