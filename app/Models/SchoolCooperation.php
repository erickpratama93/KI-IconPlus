<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolCooperation extends Model
{
    use HasFactory;

    protected $fillable=['npsn', 'school_name', 'school_address', 'accreditation','headmaster_name','phone_number','website','intern_id',];
}
