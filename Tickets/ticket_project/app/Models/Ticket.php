<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable=[
        'ticket_no',
        'date',
        'name',
        'email',
        'status',
        'create_by',
        'update_by',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    
}
