<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareInstalled extends Model
{
    use HasFactory;

    protected $table = 'software_installed';

    protected $fillable = [
        'software_id',
        'unit_id',
        'name',
        'licensed',
        'date_modified',
        'version',
    ];
}
