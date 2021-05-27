<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayslipRecord extends Model
{
    use HasFactory;

    protected $table = "payslip_records";

    protected $fillable = [
        'employee_id',
        'payslip_id',
        'data',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
