@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Pengalaman</h1><a href="{{ route('pengalaman.create') }}" class="btn btn-primary">+ Tambah Pengalaman</a>
    </div>
    <div class="card border-0 shadow-sm">
        <table class="table align-middle mb-0">
            <thead>
                <tr>
                    <th>Periode</th>
                    <th>Posisi & Instansi</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                    <tr>
                        <td>{{ $item->periode }}</td>
                        <td><strong>{{ $item->posisi }}</strong><br>{{ $item->instansi }}</td>
                        <td>{{ Str::limit($item->deskripsi, 70) }}</td>
                        <td class="text-nowrap"><a href="{{ route('pengalaman.edit', $item) }}"
                                class="btn btn-sm btn-outline-primary">Edit</a>
                            <form class="d-inline" method="POST" action="{{ route('pengalaman.destroy', $item) }}">@csrf
                                @method('DELETE')<button class="btn btn-sm btn-outline-danger">Hapus</button></form>
                        </td>
                </tr>@empty<tr>
                        <td colspan="4" class="text-center py-4">Belum ada data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
