<?php

namespace App\Models;

use App\Models\Images\MapImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Map extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'images',
        'description',
        'year'
    ];

    public function Images()
    {
        return $this->belongsTo(MapImage::class);
    }
}
