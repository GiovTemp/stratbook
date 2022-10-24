<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;
    
    protected $fillable =[ 
        'name',
        'badge',
        'image',
        'bio',
        'ability',
        'armor_rating',
        'speed_rating',
        'type',
        'organization',
        'gadgets',
        'primaries',
        'secondaries',


    ];
    
}
