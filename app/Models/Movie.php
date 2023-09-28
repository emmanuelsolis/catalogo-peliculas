<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'Synopsis',
        'year',
        'cover',
    ];
    protected $hidden = [
        'id',
        'updated_at',
        'created_at',
    ];
}
