<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timekeeping extends Model
{
    use HasFactory;

    protected $table = "timekeeping";

    protected $fillable = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
