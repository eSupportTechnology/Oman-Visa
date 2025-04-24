<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    // Table name (optional if you follow Laravel naming convention)
    protected $table = 'invoices';

    // Mass assignable fields
    protected $fillable = [
        'invoice_no',
        'date',
        'signature',
        'details',
    ];

    // If you want to automatically cast 'details' as array when you retrieve it:
    protected $casts = [
        'details' => 'array',
    ];
}
