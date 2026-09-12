<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
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
        return 'Aluno criado com sucesso.'; // sem view, só processa e redireciona depois
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
