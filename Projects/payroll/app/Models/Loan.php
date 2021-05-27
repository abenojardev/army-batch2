<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = "laons";

    protected $fillable = [
        'employee_id',
        'loan_type',
        'amount',
        'months_payable',
        'notes',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
