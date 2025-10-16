<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Curso</h1>
    <form action= "{{ route('curso.update', $curso->id) }}" method="post" >
    @csrf
    @method('PUT')
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="{{$curso->nome}}">

    <button type="submit">Enviar</button>
        </form>
</body>
</html>