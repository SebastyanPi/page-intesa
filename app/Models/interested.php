<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interested extends Model
{
    use HasFactory;

    protected $fillable = [
        'names',
        'lastname',
        'email',
        'phone',
        'message'
    ];

}
