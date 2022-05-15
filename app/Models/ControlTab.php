<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlTab extends Model
{
    use HasFactory;
    public function activitie(){
        return $this->hasMany(Activity::class);
    }
}
