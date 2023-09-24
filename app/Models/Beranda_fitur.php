<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda_fitur extends Model
{
    use HasFactory;

    protected $fillable = [
        'points_title','points_description','image_path'
    ];
}
