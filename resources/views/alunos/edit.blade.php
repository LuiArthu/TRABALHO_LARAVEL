<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Aluno</title>
</head>
<body>
    <h1>Editar Aluno de ID {{ $id }}</h1>
    <form action="/alunos/{{ $id }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nome:</label>
        <input type="text" name="nome">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
