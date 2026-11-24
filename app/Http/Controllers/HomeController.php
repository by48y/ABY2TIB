<?php

namespace App\Http\Controllers;

use App\Models\Pengalaman;
use App\Models\Portofolio;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(!Auth::check()){
            return redirect()->route('auth.login');
        }
        return view('admin.dashboard');
    }
}
