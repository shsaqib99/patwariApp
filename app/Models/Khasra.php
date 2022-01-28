<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khasra extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'khatooni_id'
    ];

    public function khatooni(){
        return $this->belongsTo(Khatooni::class);
    }

}
