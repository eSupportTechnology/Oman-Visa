<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template04 extends Model
{
    use HasFactory;

    protected $table = 'template04';

    protected $fillable = [
        // Passport
        'type', 'country_code', 'passport_number', 'full_name', 'nationality', 'dob',
        'gender', 'birth_place', 'address', 'issued_at', 'issue_date', 'expiry_date',
        'mrz', 'father_name', 'mother_name', 'old_passport', 'signature1',

        // Aadhaar
        'aadhaar_enroll_no', 'aadhaar_recipient', 'aadhaar_care_of', 'aadhaar_address',
        'aadhaar_mobile', 'aadhaar_number', 'aadhaar_identity_label', 'aadhaar_full_name',
        'aadhaar_dob', 'aadhaar_gender', 'signature2',

        // Police Verification
        'pvr_no', 'pvr_issue_date', 'pvr_name', 'pvr_address', 'pvr_remarks',
        'pvr_place', 'pvr_report_date', 'signature3'
    ];
}
