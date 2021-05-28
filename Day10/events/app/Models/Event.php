<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
// import soft delete class
use Illuminate\Database\Eloquent\SoftDeletes;  

class Event extends Model
{
    use HasFactory;

    // table name
    protected $table = "events";

    // fields
    protected $fillable = [
        'title',
        'location',
        'date',
        'description',
        'entrance_fee',
        'created_at',
        'updated_at'
    ];
}
