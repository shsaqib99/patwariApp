<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatwarCircle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function qanoongoi(){
        return $this->belongsTo(Qanoongoi::class);
    }

    public function mauzas(){
        return $this->hasMany(Mauza::class);
    }

}
