<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'pricings';
    protected $fillable = ['pricing_title', 'pricing_deskripsi', 'pricing_isi'];
}
