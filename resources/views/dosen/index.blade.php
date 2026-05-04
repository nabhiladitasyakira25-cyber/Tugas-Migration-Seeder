@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Halaman Dosen</h2>

<a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th width="200px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $d->nidn }}</td>
            <td>{{ $d->nama }}</td>
            <td>
                <a href="{{ route('dosen.show', $d->nidn) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('dosen.edit', $d->nidn) }}" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection