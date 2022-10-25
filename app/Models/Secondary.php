<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondary extends Model
{
    use HasFactory;
    
    protected $fillable =[ 
        '_id',
        'firemodes',
        'sights',
        'barrels',
        'grips',
        'underbarrel',
        'name',
        'image',
        'type',
        '__v'
    ];
}
