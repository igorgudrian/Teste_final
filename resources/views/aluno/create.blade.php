<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form action= "{{ route('aluno.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Matricula</label>
    <input type="text" name="matricula" id="matricula">
    <label for="">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="">Email</label>
    <input type="email" name="email" id="email">
    <label for="">Data Nascimento</label>
    <input type="date" name="data_nascimento" id="data_nascimento">
    <label for="">Telefone</label>
    <input type="text" name="telefone" id="telefone">

    <select class="form-control"  name="turma_id" id="turma_id">
        <option value="">Selecione</option>
           @foreach ($turmas as $turma)
           <option value="{{ $turma->id }}">{{ $turma->descricao }}</option> 
           @endforeach
    </select>

    <div class ="rpw mb-3">
        <label for="foto" class=""form-label>Foto</label>
        <input type="file" name="foto" id="foto">

    </div>
    <button type="submit">Salvar</button>

    </form>
</body>
</html>