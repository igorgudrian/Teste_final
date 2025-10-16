<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Professor</h1>
    <form action= "{{ route('professor.store', $professor->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Disciplina</label>
    <input type="text" name="disciplina" id="disciplina" value="{{$professor->disciplina}}">
    <label for="">Nome</label>
    <input type="text" name="nome" id="nome" value="{{$professor->nome}}">
    <label for="">Telefone</label>
    <input type="text" name="telefone" id="nome" value="{{$professor->telefone}}">
    <label for="">Email</label>
    <input type="text" name="email" id="email" value="{{$professor->email}}">

      <div class ="rpw mb-3">
        <label for="foto" class=""form-label>Foto</label>
        <input type="file" name="foto" id="foto">

    </div>
    </form>
</body>
</html>