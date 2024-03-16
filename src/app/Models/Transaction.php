<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'unit_id',
        'transaction_type',
        'initial_check',
        'concern',
        'status',
        'findings',
        'rendered_service',
        'recommendation',
        'received_user_id',
        'received_by_client_id',
        'received_date',
        'released_date',
        'released_user_id',

    ];
}
