@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Skill</h1><a href="{{ route('skill.create') }}" class="btn btn-primary">+ Tambah Skill</a>
    </div>
    <div class="card border-0 shadow-sm">
        <table class="table align-middle mb-0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td style="width:45%">
                            <div class="progress">
                                <div class="progress-bar" style="width:{{ $item->level }}%">{{ $item->level }}%</div>
                            </div>
                        </td>
                        <td class="text-nowrap"><a href="{{ route('skill.edit', $item) }}"
                                class="btn btn-sm btn-outline-primary">Edit</a>
                            <form class="d-inline" method="POST" action="{{ route('skill.destroy', $item) }}">@csrf
                                @method('DELETE')<button class="btn btn-sm btn-outline-danger">Hapus</button></form>
                        </td>
                </tr>@empty<tr>
                        <td colspan="3" class="text-center py-4">Belum ada data.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
