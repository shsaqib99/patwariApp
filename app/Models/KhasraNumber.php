<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhasraNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function murabba_number(){
        return $this->belongsTo(MurabbaNumber::class);
    }

    public function sub_khasra_numbers(){
        return $this->hasMany(SubKhasraNumber::class);
    }
}
