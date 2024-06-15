<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'doctor_name',
        'email',
        'designation',
        'degree',
        'department',
        'specialist',
        'doctor_experience',
        'birth_date',
        'phone_number',
        'gender',
        'address',
        'about_me',
        'image',
        'user_id',
    ];
}
