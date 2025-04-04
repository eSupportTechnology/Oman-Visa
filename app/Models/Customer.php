<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_permit_status', 'name', 'nationality', 'passport_number', 'passport_expiry_date',
        'work_permit_duration', 'reference_no', 'password','status', 'file1', 'file2', 'file3',
        'file4', 'file5', 'file6', 'file7', 'file8', 'file9'
    ];

    // Automatically hash the password before saving
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
