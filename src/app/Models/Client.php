<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $fillable = [
        'email',
        'rank',
        'first_name',
        'middle_name',
        'last_name',
        'qualifier',
        'badge_number',
        'office_unit',
        'section',
    ];
}
