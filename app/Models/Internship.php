<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'location',
        'position',
        'major',
        'jenis_kelamin',
        'status',
        'asal_sekolah'
    ];

  
       
     /**
      * Get the user that owns the Internship
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function user()
     {
         return $this->belongsTo(User::class);
     }
    
    
}
