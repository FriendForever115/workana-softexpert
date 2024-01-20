<?php

use App\Http\Controllers\UserController;

// Rota para obter todos os usuários
Route::get('/users', [UserController::class, 'index']);

// Rota para criar um novo usuário
Route::post('/users', [UserController::class, 'store']);

// Rota para obter um usuário específico pelo ID
Route::get('/users/{id}', [UserController::class, 'show']);

// Rota para atualizar um usuário pelo ID
Route::put('/users/{id}', [UserController::class, 'update']);

// Rota para deletar um usuário pelo ID
Route::delete('/users/{id}', [UserController::class, 'destroy']);
