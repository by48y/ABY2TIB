<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Admin CV' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f5f7fb; } .sidebar { min-height: 100vh; background: #101827; }
        .sidebar a { color: #b7c1d1; } .sidebar a:hover, .sidebar a.active { color: #fff; background: #26344c; }
    </style>
</head>
<body>
<div class="d-flex">
    <aside class="sidebar p-3" style="width: 250px">
        <h4 class="text-white mb-4">CV <span class="text-info">Admin</span></h4>
        <nav class="nav flex-column gap-1">
            <a class="nav-link rounded" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="nav-link rounded" href="{{ route('portofolio.index') }}">Portofolio</a>
            <a class="nav-link rounded" href="{{ route('skill.index') }}">Skill</a>
            <a class="nav-link rounded" href="{{ route('pengalaman.index') }}">Pengalaman</a>
            <a class="nav-link rounded mt-4" href="{{ route('home') }}" target="_blank">Lihat CV ↗</a>
        </nav>
    </aside>
    <main class="flex-grow-1 p-4">
        @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
        @if($errors->any()) <div class="alert alert-danger"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div> @endif
        @yield('content')
    </main>
</div>
</body>
</html>
