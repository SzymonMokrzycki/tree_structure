<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'file_type', 'root', 'id_precedent', 'subordinate'];  
}
