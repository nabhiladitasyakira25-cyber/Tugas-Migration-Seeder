@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Detail Dosen</h2>

<table class="table table-bordered">
    <tr>
        <th>NIDN</th>
        <td>{{ $dosen->nidn }}</td>
    </tr>
    <tr>
        <th>Nama</th>
        <td>{{ $dosen->nama }}</td>
    </tr>
</table>

<a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
@endsection