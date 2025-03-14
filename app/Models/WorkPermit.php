<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPermit extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference_no',
        'first_name',
        'last_name',
        'place_of_birth',
        'date_of_birth',
        'nationality',
        'passport_number',
        'passport_issue_date',
        'passport_expiry_date',
        'work_permit_type',
        'work_permit_validity_start',
        'work_permit_validity_end',
        'number_of_entries',
        'validity_date',
        'expiry_date',
        'residence_duration',
        'additional_visa_info',
        'conditions',
    ];
}
