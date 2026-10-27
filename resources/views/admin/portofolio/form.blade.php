@extends('layouts.admin')
@section('content')
    <h1 class="mb-4">
        {{ $item->exists ? 'Edit' : 'Tambah' }} Portofolio</h1>
    <form method="POST" action="{{ $item->exists ? route('portofolio.update', $item) : route('portofolio.store') }}"
        enctype="multipart/form-data" class="card border-0 shadow-sm p-4">
        @csrf @if ($item->exists)
            @method('PUT')
        @endif
        <div class="row g-3">
            <div class="col-md-8"><label class="form-label">Judul</label><input name="judul" class="form-control"
                    value="{{ old('judul', $item->judul) }}" required></div>
            <div class="col-md-4"><label class="form-label">Kategori</label><input name="kategori" class="form-control"
                    value="{{ old('kategori', $item->kategori) }}" placeholder="Website, Mobile, UI" required></div>
            <div class="col-12"><label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="form-control" required>{{ old('deskripsi', $item->deskripsi) }}</textarea>
            </div>
            <div class="col-md-6"><label class="form-label">Teknologi</label><input name="teknologi" class="form-control"
                    value="{{ old('teknologi', $item->teknologi) }}" placeholder="Laravel, MySQL, Bootstrap"></div>
            <div class="col-md-3"><label class="form-label">Tahun</label><input type="number" name="tahun"
                    class="form-control" value="{{ old('tahun', $item->tahun) }}"></div>
            <div class="col-md-3"><label class="form-label">Link Project</label><input type="url" name="link_project"
                    class="form-control" value="{{ old('link_project', $item->link_project) }}" placeholder="https://...">
            </div>
            <div class="col-12"><label class="form-label">Gambar (opsional, max 2MB)</label><input type="file"
                    name="gambar" accept="image/*" class="form-control">
                @if ($item->gambar)
                    <img src="{{ asset($item->gambar) }}" class="mt-3 rounded" width="160">
                @endif
            </div>
        </div>
        <div class="mt-4"><button class="btn btn-primary">Simpan</button> <a href="{{ route('portofolio.index') }}"
                class="btn btn-light">Batal</a></div>
    </form>
@endsection
