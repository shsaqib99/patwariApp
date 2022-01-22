<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKhasraNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kharsa_number_id'
    ];
    public function khasra_number(){
        return $this->belongsTo(KhasraNumber::class);
    }
}
