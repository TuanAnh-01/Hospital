<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctor';

    protected $fillable = [
        'name',
        'gender',
        'faculty',
        'birth',
        'degree',
        'address',
        'description'
    ];


}
