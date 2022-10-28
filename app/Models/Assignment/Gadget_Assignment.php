<?php

namespace App\Models\Assignment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gadget_Assignment extends Model
{
    use HasFactory;
    protected $table = 'gadgets_assignments';
    protected $fillable =[ 
        'operator_id',
        'gadget_id'
    ];
}
