<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur_section3 extends Model
{
    use HasFactory;
    protected $table ='fitur_section_3';
    
        protected $fillable = [
            'title_3',
            'description_3',
            'subtitle_3',
            'section3_1',
            'section3_2',
            'section3_3',
        ];
    public function fitur()
    {
        return $this->hasMany(Fitur::class);
    }
}
