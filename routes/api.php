<?php

use App\Http\Controllers\UsuariosControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Retorna todos os usuarios
Route::get('usuarios', [UsuariosControler::class, "index"]);// GET - http://127.0.0.1:8000/api/usuarios

// Busca pelo cpf e retorna o usuário específico
Route::get('usuarios/{cpf}', [UsuariosControler::class, "show"]);// GET - http://127.0.0.1:8000/api/usuarios/{cpf}

// Cadastra um usuário
Route::post('usuarios', [UsuariosControler::class, "store"]);// POST - http://127.0.0.1:8000/api/usuarios
