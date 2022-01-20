<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MurabbaNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function mauza(){
        return $this->belongsTo(Mauza::class);
    }

    public function khasra_numbers(){
        return $this->hasMany(KhasraNumber::class);
    }

}
