<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Aluno</h1>
    <form action= "{{ route('aluno.update', $aluno->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Matricula</label>
    <input type="text" name="matricula" id="matricula" value="{{$aluno->matricula}}">
    <label for="">Nome</label>
    <input type="text" name="nome" id="nome" value="{{$aluno->nome}}">
    <label for="">Email</label>
    <input type="text" name="email" id="email" value="{{$aluno->email}}">
    <label for="">Data Nascimento</label>
    <input type="text" name="data nascimento" id="data_nascimento" value="{{$aluno->data_nascimento}}">
     <label for="">Telefone</label>
    <input type="text" name="telefone" id="telefone" value = "{{$aluno->telefone}}">

      <div class ="rpw mb-3">
        <label for="foto" class=""form-label>Foto</label>
        <input type="file" name="foto" id="foto">

            <select class="form-control"  name="turma_id" id="turma_id">
        <option value="">Selecione</option>
           @foreach ($turmas as $turma)
           <option value="{{ $turma->id }}">{{ $turma->descricao }}</option> 
           @endforeach
    </select>

    </div>
    </form>
</body>
</html>