<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;
    protected $table ='cost';
    protected $fillable =[
        'name',
        'quantity',
        'taka',
        'note','is_active'
          
    ];
}
