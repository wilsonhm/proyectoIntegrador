<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    public function publication(){
        return $this->hasMany(Publication::class);
}
    public function service(){
    return $this->belongsTo(Service::class);
}
    public function ControlTab(){
    return $this->belongsTo(ControlTab::class);
}
public function person(){
    return $this->belongsTo(person::class);
}
}
