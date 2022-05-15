<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
      //Relación de muchos a muchos
      public function activitie(){
        return $this->hasMany(Activity::class);
    }
}
