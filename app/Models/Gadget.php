<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{
    use HasFactory;
    protected $fillable =[ 
        '_id',
        'name',
        'description',
        'image',
        'assignment',
        'uses',
        '__v'
    ];

    public function operators(){
        return $this->belongsToMany(Operator::class);
    }
}
