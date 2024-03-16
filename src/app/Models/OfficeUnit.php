<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeUnit extends Model
{
    use HasFactory;

    protected $table = 'office_units';

    protected $fillable = [
        'office_unit_name',
    ];
}
