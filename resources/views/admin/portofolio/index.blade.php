@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Portofolio</h1><a href="{{ route('portofolio.create') }}" class="btn btn-primary">+ Tambah Portofolio</a>
    </div>
    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td>
                                @if ($item->gambar)
                                    <img src="{{ asset($item->gambar) }}" width="70" height="50" style="object-fit:cover"
                                    class="rounded">@else—
                                @endif
                            </td>
                            <td><strong>{{ $item->judul }}</strong><br><small
                                    class="text-muted">{{ Str::limit($item->deskripsi, 55) }}</small></td>
                            <td>{{ $item->kategori }}</td>
                            <td>{{ $item->tahun ?: '—' }}</td>
                            <td class="text-nowrap"><a href="{{ route('portofolio.edit', $item) }}"
                                    class="btn btn-sm btn-outline-primary">Edit</a>
                                <form class="d-inline" method="POST" action="{{ route('portofolio.destroy', $item) }}"
                                    onsubmit="return confirm('Hapus portofolio ini?')">@csrf @method('DELETE')<button
                                        class="btn btn-sm btn-outline-danger">Hapus</button></form>
                            </td>
                    </tr>@empty<tr>
                            <td colspan="5" class="text-center py-4">Belum ada data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
