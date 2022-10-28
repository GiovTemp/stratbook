<?php

namespace App\Models\Assignment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondary_Assignment extends Model
{
    use HasFactory;
    protected $table = 'secondary_assignments';
    protected $fillable =[ 
        'operator_id',
        'secondary_id'
    ];
}
