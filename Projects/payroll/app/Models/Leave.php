<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $table = "leaves";

    protected $fillable = [
        'employee_id',
        'leave_type',
        'start',
        'end',
        'notes',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
