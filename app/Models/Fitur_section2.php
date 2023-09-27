<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur_section2 extends Model
{
    use HasFactory;
    protected $table ='fitur_section_2';
    
    protected $fillable = [
        'title_2',
        'description_2',
        'subtitle_2',
        'section2_1',
        'section2_2',
        'section2_3' ,
    ];
    // Definisikan relasi dengan model Fitur
    public function fitur()
    {
        return $this->hasMany(Fitur::class);
    }
}
