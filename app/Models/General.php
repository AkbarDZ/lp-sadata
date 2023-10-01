<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    // public $timestamps = true;
    use HasFactory;
    public $timestamps = true;
    protected $table = 'generals';
    protected $fillable = [
        'guidelines',
        'statusbasic',
        'statusadvance',
        'statusexpert',
    ];

}
