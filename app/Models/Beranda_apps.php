<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda_apps extends Model
{
    use HasFactory;

    protected $fillable = [
        'features_title','features_description'
    ];
}
