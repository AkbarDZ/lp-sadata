<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'reports';
    protected $fillable = [
        'sales_id',
        'statusreport_basic',
        'statusreport_advance',
        'statusreport_expert',
    ];
}