<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    use HasFactory;

    public function stand(){
        return $this->belongsTo(Stand::class);
    }
    public function asistence(){
        return $this->hasMany(Asistence::class);
}

}
