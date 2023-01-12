<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\FilamentUser;

class Admin extends Authenticatable implements FilamentUser
{
    protected $guarded = ['id'];

    public function canAccessFilament(): bool
    {
        return true;
    }
}
