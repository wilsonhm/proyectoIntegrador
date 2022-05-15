<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    use HasFactory;
    public function rows(){
        return $this->belongsTo(Row::class);
    }
    public function partner(){
        return $this->hasMany(partner::class);
    }
    }

