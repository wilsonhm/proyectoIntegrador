<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistence extends Model
{
    use HasFactory;
    public function partner(){
        return $this->belongsTo(partner::class);
    }
    public function activity(){
        return $this->belongsTo(activity::class);
    }
}
