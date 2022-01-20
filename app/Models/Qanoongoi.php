<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qanoongoi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function tehsil(){
        return $this->belongsTo(Tehsil::class);
    }

    public function patwar_circles(){
        return $this->hasMany(PatwarCircle::class);
    }

}
