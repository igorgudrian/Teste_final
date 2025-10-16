<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Curso</h1>
    <form action= "{{ route('curso.store') }}" method="post" >
    @csrf
    <label for="nome">Nome Curso</label>
    <input type="text" name="nome" id="nome">

    <button type="submit">Salvar</button>

    </form>
</body>
</html>