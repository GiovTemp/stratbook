<?php

namespace App\Models\Assignment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Primary_Assignment extends Model
{
    use HasFactory;
    protected $table = 'operator_primary';
    protected $fillable =[ 
        'operator_id',
        'primary_id'
    ];
}
