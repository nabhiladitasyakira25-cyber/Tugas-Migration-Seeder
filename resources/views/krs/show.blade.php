@extends('layouts.app')

@section('content')
<h2 class="fw-bold">Detail KRS</h2>

<table class="table table-bordered">
    <tr>
        <th>NPM</th>
        <td>{{ $krs->npm }}</td>
    </tr>
    <tr>
        <th>Kode Matakuliah</th>
        <td>{{ $krs->kode_matakuliah }}</td>
    </tr>
</table>

<a href="{{ route('krs.index') }}" class="btn btn-secondary">Kembali</a>
@endsection