<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlacklistedDevice extends Model
{
    use HasFactory;
    protected $table='blacklisted_devices';

    
}
