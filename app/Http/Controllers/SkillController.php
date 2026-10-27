<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('admin.skill.index', ['items' => Skill::latest()->get()]);
    }

    public function create()
    {
        return view('admin.skill.form', ['item' => new Skill]);
    }

    public function store(Request $request)
    {
        Skill::create($request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'level' => ['required', 'integer', 'between:1,100'],
        ]));

        return redirect()->route('skill.index')->with('success', 'Skill berhasil ditambahkan.');
    }

    public function edit(Skill $skill)
    {
        return view('admin.skill.form', ['item' => $skill]);
    }

    public function update(Request $request, Skill $skill)
    {
        $skill->update($request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'level' => ['required', 'integer', 'between:1,100'],
        ]));

        return redirect()->route('skill.index')->with('success', 'Skill berhasil diperbarui.');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return back()->with('success', 'Skill berhasil dihapus.');
    }
}
