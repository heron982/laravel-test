<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * Regastar os usuários de autenticação
 */
class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Mostrar todos os usuários de autenticação
     *
     * @return void
     */
    public function index()
    {
        $users = User::all();
        if(!$users) {
            return response()->json([
                'status' => 'error',
                'message' => 'Nenhum usuário encontrado'
            ]);
        }
        return response()->json([
            'status' => 'success',
            'users'  => $users
        ]);
    }

    /**
     * Mostrar um único usuário de autenticação pelo id
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        $user = User::find($id);
        if(!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'Nenhum usuário encontrado'
            ]);
        }
        return response()->json([
            'status' => 'success',
            'user' => $user
        ]);
    }
}
