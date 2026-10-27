<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    public function index()
    {
        return view('admin.pengalaman.index', ['items' => Pengalaman::latest()->get()]);
    }

    public function create()
    {
        return view('admin.pengalaman.form', ['item' => new Pengalaman]);
    }

    public function store(Request $request)
    {
        Pengalaman::create($request->validate($this->rules()));

        return redirect()->route('pengalaman.index')->with('success', 'Pengalaman berhasil ditambahkan.');
    }

    public function edit(Pengalaman $pengalaman)
    {
        return view('admin.pengalaman.form', ['item' => $pengalaman]);
    }

    public function update(Request $request, Pengalaman $pengalaman)
    {
        $pengalaman->update($request->validate($this->rules()));

        return redirect()->route('pengalaman.index')->with('success', 'Pengalaman berhasil diperbarui.');
    }

    public function destroy(Pengalaman $pengalaman)
    {
        $pengalaman->delete();

        return back()->with('success', 'Pengalaman berhasil dihapus.');
    }

    private function rules(): array
    {
        return [
            'posisi' => ['required', 'string', 'max:120'],
            'instansi' => ['required', 'string', 'max:150'],
            'periode' => ['required', 'string', 'max:80'],
            'deskripsi' => ['required', 'string'],
        ];
    }
}
