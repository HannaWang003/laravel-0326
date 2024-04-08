<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    protected $table = 'fish';
    protected $fillable = ['name', 'color', 'years'];
    use HasFactory;
}
