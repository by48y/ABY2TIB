@extends('layouts.admin')
@section('content')
    <h1 class="mb-4">
        {{ $item->exists ? 'Edit' : 'Tambah' }} Pengalaman</h1>
    <form method="POST" action="{{ $item->exists ? route('pengalaman.update', $item) : route('pengalaman.store') }}"
        class="card border-0 shadow-sm p-4">@csrf @if ($item->exists)
            @method('PUT')
        @endif
        <div class="row g-3">
            <div class="col-md-6"><label class="form-label">Posisi</label><input name="posisi" class="form-control"
                    value="{{ old('posisi', $item->posisi) }}" required></div>
            <div class="col-md-6"><label class="form-label">Instansi</label><input name="instansi" class="form-control"
                    value="{{ old('instansi', $item->instansi) }}" required></div>
            <div class="col-12"><label class="form-label">Periode</label><input name="periode" class="form-control"
                    value="{{ old('periode', $item->periode) }}" placeholder="2024 — Sekarang" required></div>
            <div class="col-12"><label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" rows="5" class="form-control" required>{{ old('deskripsi', $item->deskripsi) }}</textarea>
            </div>
        </div>
        <div class="mt-4"><button class="btn btn-primary">Simpan</button> <a href="{{ route('pengalaman.index') }}"
                class="btn btn-light">Batal</a></div>
    </form>
@endsection
