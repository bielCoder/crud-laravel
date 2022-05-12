<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    {{--CSS--}}
    <link rel="stylesheet" href="/css/style.css">
    {{--Bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Aula Crud</title>
</head>
<body>

       
            <p> {{session('msg')}}</p>

     

 <form action="{{ route('edit',['id' => $id->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{$id->nome}}" placeholder="Nome Completo">
    <input type="mail" name="email" value="{{$id->email}}" placeholder="E-mail">
    <input type="text" name="telefone" value="{{$id->telefone}}" placeholder="Telefone">
    <input type="submit" name="Atualizar" value="Atualizar">
 </form>




</body>
</html>