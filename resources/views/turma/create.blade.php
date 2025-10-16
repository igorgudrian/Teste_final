<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Turma</h1>
    <form action= "{{ route('turma.store') }}" method="post" >
    @csrf
    <label for="descricao">Descricao Turma</label>
    <input type="text" name="descricao" id="descricao">
    <select name="curso_id" id="curso_id">
        <option value="">Selecione</option>
        @foreach ($cursos as $curso)
        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
        @endforeach
    </select>

    <button type="submit">Salvar</button>

    </form>
</body>
</html>