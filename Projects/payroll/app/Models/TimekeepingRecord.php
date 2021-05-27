<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimekeepingRecord extends Model
{
    use HasFactory;

    protected $table = "deductions";

    protected $fillable = [
        'employee_id',
        'clockin',
        'clockout',
        'total',
        'timekeeping_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
