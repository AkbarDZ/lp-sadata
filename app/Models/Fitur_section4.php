<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitur_section4 extends Model
{
    use HasFactory;
    protected $table ='fitur_section_4';

    protected $fillable = [
        'title_4', 
        'description_4',
        'titlecard_4_1',
        'descriptioncard_4_1',
        'titlecard_4_2',
        'descriptioncard_4_2' ,
        'titlecard_4_3',
        'descriptioncard_4_3',
    ];
    public function fitur()
    {
        return $this->hasMany(Fitur::class);
    }
}
