<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda_summary extends Model
{
    use HasFactory;

    protected $fillable = [
        'benefits_title','benefits_description'
    ];
}
