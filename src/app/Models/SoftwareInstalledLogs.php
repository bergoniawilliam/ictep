<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareInstalledLogs extends Model
{
    use HasFactory;

    protected $table = 'software_installed_logs';

    protected $fillable = [
        'software_installed_id',
        'field',
        'value',
        'action',
    ];
}
