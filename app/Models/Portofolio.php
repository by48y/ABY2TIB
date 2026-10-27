<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio_1002';

    protected $fillable = [
        'judul', 'kategori', 'deskripsi', 'teknologi',
        'link_project', 'gambar', 'tahun',
    ];
}
