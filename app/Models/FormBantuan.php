<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormBantuan extends Model
{
    use HasFactory;
    protected $table = 'school_assistance';

    protected $fillable = [
        'school_name',
        'assistance_type',
        'donor_name',
        'donor_contact',
        'notes'
    ];
}
