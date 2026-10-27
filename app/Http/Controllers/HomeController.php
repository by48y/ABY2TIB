<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use App\Models\Portofolio;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'portofolios' => Portofolio::latest()->get(),
            'skills' => Skill::orderByDesc('level')->get(),
            'pengalaman' => Pengalaman::latest()->get(),
        ]);
    }
}
