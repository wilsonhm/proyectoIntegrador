<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    public function users(){
        return $this->belongsTo(User::class);
    }




  public function activities(){
    return $this->hasMany(Activity::class);
}
}
