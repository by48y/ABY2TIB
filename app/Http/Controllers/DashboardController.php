<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use App\Models\Portofolio;
use App\Models\Skill;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'portofolioCount' => Portofolio::count(),
            'skillCount' => Skill::count(),
            'pengalamanCount' => Pengalaman::count(),
        ]);
    }
}
