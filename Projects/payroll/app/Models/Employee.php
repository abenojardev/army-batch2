<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employees";

    protected $fillable = [
        'employee_id',
        'fname',
        'lname',
        'mname',
        'contact',
        'address',
        'birthday',
        'gender',
        'designation',
        'rate',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
