<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Supondo que você tenha um modelo User

class UserController extends Controller
{
    public function index()
    {
        return User::all(); // Retorna todos os usuários
    }

    public function store(Request $request)
    {
        return User::create($request->all()); // Cria um novo usuário
    }

    public function show($id)
    {
        return User::findOrFail($id); // Retorna um usuário pelo ID
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all()); // Atualiza um usuário
        return $user;
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete(); // Deleta um usuário
        return response()->json(['message' => 'User deleted successfully']);
    }
}
