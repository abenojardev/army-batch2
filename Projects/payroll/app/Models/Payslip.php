<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;

    protected $table = "payslips";

    protected $fillable = [
        'cuttoff_start',
        'cuttoff_end',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
