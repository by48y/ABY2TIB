<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aby Amanullah — CV & Portofolio</title>
    <meta name="description" content="CV dan portofolio Aby Amanullah">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --ink: #14213d;
            --cyan: #2dd4bf;
            --paper: #f6f7fb;
            --muted: #667085;
        }

        * {
            scroll-behavior: smooth;
        }

        body {
            background: var(--paper);
            color: var(--ink);
            font-family: 'DM Sans', sans-serif;
        }

        h1,
        h2,
        h3,
        .brand {
            font-family: 'Space Grotesk', sans-serif;
        }

        .navbar {
            background: rgba(246, 247, 251, .9);
            backdrop-filter: blur(12px);
        }

        .hero {
            padding: 130px 0 90px;
            background: radial-gradient(circle at 80% 10%, #c9fff5, transparent 35%);
        }

        .eyebrow {
            color: #0f9f8c;
            font-size: .8rem;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .display-title {
            font-size: clamp(3.2rem, 8vw, 7rem);
            line-height: .95;
            letter-spacing: -5px;
        }

        .accent {
            color: #0f9f8c;
        }

        .avatar {
            width: 210px;
            height: 210px;
            border-radius: 28px;
            background: #14213d;
            color: var(--cyan);
            display: grid;
            place-items: center;
            font-size: 5rem;
            font-family: 'Space Grotesk';
            transform: rotate(4deg);
            box-shadow: 18px 18px 0 var(--cyan);
        }

        .section {
            padding: 100px 0;
        }

        .section-title {
            font-size: clamp(2rem, 5vw, 4rem);
            letter-spacing: -2px;
        }

        .card-clean {
            border: 0;
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 12px 30px rgba(20, 33, 61, .06);
            overflow: hidden;
        }

        .project-image {
            height: 210px;
            background: linear-gradient(135deg, #14213d, #35607d);
            display: grid;
            place-items: center;
            color: var(--cyan);
            font-size: 4rem;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .muted {
            color: var(--muted);
        }

        .skill-bar {
            height: 8px;
            background: #e6eaf0;
            border-radius: 10px;
            overflow: hidden;
        }

        .skill-bar span {
            display: block;
            height: 100%;
            background: var(--cyan);
        }

        footer {
            background: #14213d;
            color: #d9e2ef;
        }

        .btn-accent {
            background: var(--cyan);
            color: #08231f;
            border: 0;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top border-bottom">
        <div class="container py-2"><a class="navbar-brand brand fw-bold" href="#beranda">AA<span
                    class="accent">.</span></a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">☰</button>
            <div class="collapse navbar-collapse" id="nav">
                <div class="navbar-nav ms-auto gap-lg-3"><a class="nav-link" href="#tentang">Tentang</a><a
                        class="nav-link" href="#skill">Skill</a><a class="nav-link" href="#pengalaman">Pengalaman</a><a
                        class="nav-link" href="#portofolio">Portofolio</a><a class="nav-link"
                        href="{{ route('dashboard') }}">Admin ↗</a></div>
            </div>
        </div>
    </nav>
    <main>
        <section id="beranda" class="hero">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7">
                        <p class="eyebrow">WEB DEVELOPER • INFORMATIKA</p>
                        <h1 class="display-title mb-4">Aby<br><span class="accent">Amanullah.</span></h1>
                        <p class="lead muted mb-4">Saya membangun aplikasi web yang rapi, cepat, dan menyelesaikan
                            masalah nyata dengan Laravel dan JavaScript.</p><a
                            class="btn btn-accent rounded-pill px-4 py-3" href="#portofolio">Lihat karya saya ↓</a>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center">
                        <div class="avatar">AA</div>
                    </div>
                </div>
            </div>
        </section>
        <section id="tentang" class="section">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <p class="eyebrow">01 — TENTANG</p>
                        <h2 class="section-title">Ide menjadi <span class="accent">solusi.</span></h2>
                    </div>
                    <div class="col-lg-7">
                        <p class="fs-4">Mahasiswa Informatika yang fokus pada pengembangan produk digital dan
                            pengalaman pengguna.</p>
                        <p class="muted">Terbiasa mengerjakan aplikasi CRUD, integrasi database, autentikasi, dan
                            desain antarmuka responsif menggunakan Laravel, PHP, MySQL, Bootstrap, dan JavaScript.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="skill" class="section bg-white">
            <div class="container">
                <p class="eyebrow">02 — KOMPETENSI</p>
                <h2 class="section-title mb-5">Tools yang saya gunakan.</h2>
                <div class="row g-4">
                    @forelse($skills as $skill)
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between mb-2"><strong>{{ $skill->nama }}</strong><span
                                    class="muted">{{ $skill->level }}%</span></div>
                            <div class="skill-bar"><span style="width:{{ $skill->level }}%"></span></div>
                    </div>@empty<p class="muted">Tambahkan skill melalui halaman admin.</p>
                    @endforelse
                </div>
            </div>
        </section>
        <section id="pengalaman" class="section">
            <div class="container">
                <p class="eyebrow">03 — PERJALANAN</p>
                <h2 class="section-title mb-5">Pengalaman & pendidikan.</h2>
                <div class="row g-4">
                    @forelse($pengalaman as $item)
                        <div class="col-lg-6">
                            <div class="card-clean p-4 h-100">
                                <p class="eyebrow mb-2">{{ $item->periode }}</p>
                                <h3>{{ $item->posisi }}</h3>
                                <h5 class="muted">{{ $item->instansi }}</h5>
                                <p class="muted mb-0">{{ $item->deskripsi }}</p>
                            </div>
                    </div>@empty<p class="muted">Tambahkan pengalaman melalui halaman admin.</p>
                    @endforelse
                </div>
            </div>
        </section>
        <section id="portofolio" class="section bg-white">
            <div class="container">
                <p class="eyebrow">04 — KARYA TERPILIH</p>
                <h2 class="section-title mb-5">Project yang pernah dibuat.</h2>
                <div class="row g-4">
                    @forelse($portofolios as $project)
                        <div class="col-md-6 col-lg-4">
                            <article class="card-clean h-100">
                                @if ($project->gambar)
                                    <div class="project-image"><img src="{{ asset($project->gambar) }}"
                                        alt="{{ $project->judul }}"></div>@else<div class="project-image">&lt;/&gt;
                                    </div>
                                @endif
                                <div class="p-4">
                                    <small class="accent fw-bold">{{ $project->kategori }} @if ($project->tahun)
                                            • {{ $project->tahun }}
                                        @endif
                                    </small>
                                    <h3 class="mt-2">{{ $project->judul }}</h3>
                                    <p class="muted">{{ $project->deskripsi }}</p>
                                    @if ($project->teknologi)
                                        <p class="small muted mb-3">{{ $project->teknologi }}</p>
                                        @endif @if ($project->link_project)
                                            <a class="accent text-decoration-none fw-bold"
                                                href="{{ $project->link_project }}" target="_blank"
                                                rel="noopener">Lihat project ↗</a>
                                        @endif
                                </div>
                            </article>
                    </div>@empty<p class="muted">Belum ada portofolio. Tambahkan dari halaman admin.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </main>
    <footer class="py-5">
        <div class="container d-flex flex-wrap justify-content-between gap-3"><span>© {{ date('Y') }} Aby
                Amanullah</span><span>Template : <a class="text-info"
                    href="https://getbootstrap.com/docs/5.3/" target="_blank" rel="noopener">Bootstrap 5</a>
                (open-source)</span></div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
