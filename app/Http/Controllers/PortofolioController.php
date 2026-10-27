<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortofolioController extends Controller
{
    public function index()
    {
        return view('admin.portofolio.index', ['items' => Portofolio::latest()->get()]);
    }

    public function create()
    {
        return view('admin.portofolio.form', ['item' => new Portofolio]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['gambar'] = $this->upload($request);
        Portofolio::create($data);

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil ditambahkan.');
    }

    public function edit(Portofolio $portofolio)
    {
        return view('admin.portofolio.form', ['item' => $portofolio]);
    }

    public function update(Request $request, Portofolio $portofolio)
    {
        $data = $this->validated($request);
        if ($request->hasFile('gambar')) {
            $this->removeImage($portofolio->gambar);
            $data['gambar'] = $this->upload($request);
        }
        $portofolio->update($data);

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil diperbarui.');
    }

    public function destroy(Portofolio $portofolio)
    {
        $this->removeImage($portofolio->gambar);
        $portofolio->delete();

        return back()->with('success', 'Portofolio berhasil dihapus.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'judul' => ['required', 'string', 'max:150'],
            'kategori' => ['required', 'string', 'max:80'],
            'deskripsi' => ['required', 'string'],
            'teknologi' => ['nullable', 'string', 'max:255'],
            'link_project' => ['nullable', 'url', 'max:255'],
            'tahun' => ['nullable', 'integer', 'between:2000,2100'],
            'gambar' => ['nullable', 'image', 'max:2048'],
        ]);
    }

    private function upload(Request $request): ?string
    {
        if (! $request->hasFile('gambar')) {
            return null;
        }

        $directory = public_path('uploads/portofolio');
        File::ensureDirectoryExists($directory);
        $file = $request->file('gambar');
        $name = uniqid('portfolio_', true).'.'.$file->getClientOriginalExtension();
        $file->move($directory, $name);

        return 'uploads/portofolio/'.$name;
    }

    private function removeImage(?string $path): void
    {
        if ($path && File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
