<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    use HasFactory;
    protected $fillable = [
        'feature_name',
        'description',
        'feature_image_path',
        'section2_id',
        'section3_id',
        'section4_id',
    ];

    public function fitur_section_2()
    {
        return $this->belongsTo(Fitur_section2::class, 'section2_id');
    }

    public function fitur_section_3()
    {
        return $this->belongsTo(Fitur_section3::class, 'section3_id');
    }

    public function fitur_section_4()
    {
        return $this->belongsTo(Fitur_section4::class, 'section4_id');
    }
}
