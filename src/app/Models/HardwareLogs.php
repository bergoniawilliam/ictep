<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardwareLogs extends Model
{
    use HasFactory;

    protected $table = 'hardware_logs';

    protected $fillable = [
        'hardware_id',
        'field',
        'value',
        'action',
    ];
}
