<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardwareSpecification extends Model
{
    use HasFactory;

    protected $table = 'hardware_specifications';

    protected $fillable = [
        'hardware_id',
        'specifications',

    ];
}
