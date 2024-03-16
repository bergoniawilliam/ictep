<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;

    protected $table = 'units';

    protected $fillable = [
        'client_id',
        'name_tag',
        'category',
        'prebuilt',
        'brand',
        'model',
        'serial_number',
    ];
}
