<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class finance extends Model
{
    use HasFactory;

    protected $fillable =[
        'judul','user_id', 'type', 'category', 'amount', 'date', 'description'
    ];
}
