<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda_main extends Model
{
    use HasFactory;

    protected $fillable = [
        'top_page_text','top_page_subtext','top_page_desc','apps_desc','summary_desc'
    ];
}
