@extends('layouts.admin')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-uppercase text-muted small mb-1">Content management</p>
            <h1>Dashboard CV</h1>
        </div><a href="{{ route('home') }}" target="_blank" class="btn btn-dark">Preview CV ↗</a>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4">
                <div class="text-muted">Portofolio</div>
                <div class="display-5 fw-bold">{{ $portofolioCount }}</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4">
                <div class="text-muted">Skill</div>
                <div class="display-5 fw-bold">{{ $skillCount }}</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4">
                <div class="text-muted">Pengalaman</div>
                <div class="display-5 fw-bold">{{ $pengalamanCount }}</div>
            </div>
        </div>
    </div>
@endsection
