<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    use HasFactory;
    protected $fillable =[ 
        '_id',
        'name',
        'description',
        'image',
        'uses',
        '__v'
    ];

    public function operator()
    {
        return $this->hasOne(Operator::class);
    }
}
