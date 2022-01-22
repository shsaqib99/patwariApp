<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mauza extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'patwar_circle_id'
    ];
    public function patwar_circle(){
        return $this->belongsTo(PatwarCircle::class);
    }

    public function murabba_numbers(){
        return $this->hasMany(MurabbaNumber::class);
    }

}
