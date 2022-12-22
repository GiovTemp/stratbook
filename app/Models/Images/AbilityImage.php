<?php

namespace App\Models\Images;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbilityImage extends Model
{
    use HasFactory;

    protected $table = "ability_images";

    protected $fillable=[
        'path',
    ];

        /**
     * Get the Ability that owns the Image
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ability()
    {
        return $this->belongsTo(Ability::class);
    }
}

