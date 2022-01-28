<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khatooni extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'khaivet_id'
    ];

    public function khaivet(){
        return $this->belongsTo(Khaivet::class);
    }

    public function khasras(){
        return $this->hasMany(Khasra::class);
    }


}
