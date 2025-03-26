<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;

    protected $table = 'to_do_lists'; // Pastikan nama tabel sesuai dengan yang ada di database
    protected $fillable = ['user_id', 'title', 'description', 'category', 'status', 'priority', 'date'];
    
}
