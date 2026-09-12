<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Route::get('/alunos', [AlunoController::class, 'index']);
Route::get('/alunos/create', [AlunoController::class, 'create']);
Route::post('/alunos', [AlunoController::class, 'store']);
Route::get('/alunos/{id}', [AlunoController::class, 'show']);
Route::get('/alunos/{id}/edit', [AlunoController::class, 'edit']);
Route::put('/alunos/{id}', [AlunoController::class, 'update']);
Route::delete('/alunos/{id}', [AlunoController::class, 'destroy']);
{
    public function index()
    {
        return view('alunos.index');
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        return 'Aluno criado com sucesso.'; 
    }

    public function show($id)
    {
        return view('alunos.show', ['id' => $id]);
    }

    public function edit($id)
    {
        return view('alunos.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        return 'Aluno de ID ' . $id . ' atualizado com sucesso.';
    }

    public function destroy($id)
    {
        return 'Aluno de ID ' . $id . ' removido com sucesso.';
    }
}
