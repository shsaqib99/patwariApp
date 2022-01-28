<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khaivet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mauza_id'
    ];

    public function mauza(){
        return $this->belongsTo(Mauza::class);
    }

    public function khatoonis(){
        return $this->hasMany(Khatooni::class);
    }


}
