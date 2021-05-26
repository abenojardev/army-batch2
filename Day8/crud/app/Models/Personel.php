<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
// import soft delete class
use Illuminate\Database\Eloquent\SoftDeletes;  

class Personel extends Model
{
    use HasFactory, SoftDeletes;

    // table name
    protected $table = "personel";

    // fields
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'age',
        'gender',
        'birthday',
        'contact',
        'address',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
