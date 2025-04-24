<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template03 extends Model
{
    use HasFactory;

    protected $table = 'template03';

    protected $fillable = [
        'name',
        'passport_number',
        'application_date',
        'seri_no',
        'sam_no',
        'ozel_no',
        'reference_number',
        'signature',
    ];
}

