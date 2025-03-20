<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diary_book extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','diary','mood','weather','location'];
}
