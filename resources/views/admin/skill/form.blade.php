@extends('layouts.admin')
@section('content')
    <h1 class="mb-4">
        {{ $item->exists ? 'Edit' : 'Tambah' }} Skill</h1>
    <form method="POST" action="{{ $item->exists ? route('skill.update', $item) : route('skill.store') }}"
        class="card border-0 shadow-sm p-4">@csrf @if ($item->exists)
            @method('PUT')
        @endif
        <label class="form-label">Nama Skill</label><input name="nama" class="form-control mb-3"
            value="{{ old('nama', $item->nama) }}" required><label class="form-label">Level (%)</label><input type="number"
            name="level" class="form-control" min="1" max="100" value="{{ old('level', $item->level ?: 75) }}"
            required>
        <div class="mt-4"><button class="btn btn-primary">Simpan</button> <a href="{{ route('skill.index') }}"
                class="btn btn-light">Batal</a></div>
    </form>
@endsection
