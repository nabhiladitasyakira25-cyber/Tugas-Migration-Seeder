@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Halaman KRS</h2>

<a href="{{ route('krs.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Kode Matakuliah</th>
            <th width="200px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $k)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->npm }}</td>
            <td>{{ $k->kode_matakuliah }}</td>
            <td>
                <a href="{{ route('krs.show', $k->id) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('krs.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection