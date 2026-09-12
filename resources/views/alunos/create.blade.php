<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Aluno</title>
</head>
<body>
    <h1>Cadastrar Aluno</h1>
    <form action="/alunos" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>

