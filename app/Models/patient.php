<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'birthdate',
        'age',
        'gender',
        'blood_group',
        'email',
        'phone_number',
        'mobile',
        'address',
        'post_code',
        'city',
        'heart_diseases',
        'blood_pressure',
        'accident',
        'diabetic',
        'surgeries',
        'other',
        'user_id',
    ];

    public function gethospital()
    {
        return $this->belongsTo(User::class);
    }
}
