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
        'asal_sekolah',
        'durasi_pkl',
        'surat_pengajuan',
        'path_pengajuan',
        'surat_balasan',
        'path_balasan'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
