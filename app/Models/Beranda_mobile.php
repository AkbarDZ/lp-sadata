<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda_mobile extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobiles_title','mobiles_description'
    ];
}
