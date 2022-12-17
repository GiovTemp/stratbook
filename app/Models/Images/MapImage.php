<?php

namespace App\Models\Images;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapImage extends Model
{
    use HasFactory;

    protected $table = "map_images";

    protected $fillable=[
        'path',
    ];

    /**
     * Get the Map that owns the Image
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function map()
    {
        return $this->belongsTo(Map::class);
    }

}
