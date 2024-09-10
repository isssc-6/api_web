<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'cpf',
        'name',
        'data_nascimento'
    ];
}
