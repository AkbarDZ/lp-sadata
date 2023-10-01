<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dropsel extends Model
{
    use HasFactory;

    protected $table = 'dropsels';
   // app/Models/Dropsel.php
protected $fillable = ['sales_id', 'sell_id',];


    // Definisikan relasi ke tabel 'reports' dengan menggunakan belongsTo
    public function report()
    {
        return $this->belongsTo(Report::class, 'sales_id');
    }
  
}
