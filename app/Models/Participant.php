<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
  ///  use HasFactory;
    public $table = "participant";
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'profession',
        // Ajoutez d'autres champs de votre modèle ici
    ];
} 
