<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // If you're logging customers in
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'nationality',
        'dob',
        'passport_number',
        'passport_expiry_date',
        'work_permit_duration',
        'work_permit_status',
        'reference_no',
        'visa_type',
        'password',
        'file1',
        'file2',
        'file3',
        'file4',
        'file5',
        'file6',
        'file7',
        'file8',
        'file9',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'dob' => 'date',
        'passport_expiry_date' => 'date',
    ];
}
