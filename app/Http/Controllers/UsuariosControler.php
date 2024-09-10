<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Exception;
use Illuminate\Http\Request;

class UsuariosControler extends Controller
{
    public function index()
    {
        return Usuarios::all();
    }


    public function show($cpf)
    {
        $user = Usuarios::where('cpf', $cpf)->first();
        if ($user){
            return response()->json($user, 200);
        }

        return response()->json("Usuário não encontrado.", 404);
    }


    public function store(Request $request)
    {
        try {   
            Usuarios::create([
                'cpf' => $request->cpf,
                'name' => $request->name,
                'data_nascimento' => $request->data_nascimento
            ]);

            return response()->json("Usuário cadastrado.", 201);

    } catch (Exception $e) {
        return response()->json("Usuário não cadastrado.",404);
    }
    }
}
