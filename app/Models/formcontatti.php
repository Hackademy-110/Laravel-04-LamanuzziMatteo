<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formcontatti extends Model
{
    use HasFactory;
    protected $fillable=['email','contenuto'];
    protected $table='formcontatti';
    //va messo nome plurale inglese altrimenti non lo trova. Nel caso mettere un protected table per il nome che deve cercare.
}
