<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabri extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'mail',
        'mot_passe',
        'status',
    ];
}
