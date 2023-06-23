<?php

namespace App\Http\Controllers;

use App\Models\AuthUser;
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

    public function index()
    {
        $users = AuthUser::all();
        return response()->json([
            'status' => 'success',
            'users'  => $users
        ]);
    }

    public function show($id)
    {
        $user = AuthUser::find($id);
        return response()->json([
            'status' => 'success',
            'user' => $user
        ]);
    }
}
