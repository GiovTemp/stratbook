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
        'ability_id',
        'armor_rating',
        'speed_rating',
        'type',
        'organization',
        'gadgets',
        'primaries',
        'secondaries',


    ];
    
    public function ability()
    {
        return $this->belongsTo(Ability::class);
    }

    /**
     * Get all of the Primaries for the Operator
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function primaries() 
    {
        return $this->belongsToMany(Primary::class);
    }

        /**
     * Get all of the Secondaries for the Operator
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function secondaries() 
    {
        return $this->belongsToMany(Secondary::class);
    }

        /**
     * Get all of the Gadgets for the Operator
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function gadgets() 
    {
        return $this->belongsToMany(Gadget::class);
    }

}
