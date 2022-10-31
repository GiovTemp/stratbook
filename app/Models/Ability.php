<?php

namespace App\Models;

use App\Models\Images\AbilityImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ability extends Model
{
    use HasFactory;
    protected $fillable =[ 
        '_id',
        'name',
        'description',
        'images',
        'uses',
        '__v'
    ];

    public function operator()
    {
        return $this->hasOne(Operator::class);
    }

    public function images()
    {
        return $this->belongsTo(AbilityImage::class);
    }
}
