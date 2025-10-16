<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Turma</h1>
    <form action= "{{ route('turma.update', $turma->id) }}" method="post" >
    @csrf
    @method('PUT')
    <label for="descricao">descrição</label>
    <input type="text" name="descricao" id="descricao" value="{{$turma->descricao}}">
    <select name="curso_id" id="curso_id">
        <option value="{{$turma->curso_id}}" selected>{{$turma->curso->nome}}</option>
           @foreach ($cursos as $curso)
        <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
           @endforeach
    </select>

    <button type="submit">Enviar</button>
        </form>
</body>
</html>