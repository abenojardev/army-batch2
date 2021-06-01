<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterlist extends Model
{
    use HasFactory;
 
    protected $table = "masterlist";
 
    protected $fillable = [
        "name",
        "age",
        "gender",
        "status",
        "total_payment",
        "birthday"
    ];
}
