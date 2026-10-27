<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    protected $table = 'pengalaman_1002';

    protected $fillable = ['posisi', 'instansi', 'periode', 'deskripsi'];
}
