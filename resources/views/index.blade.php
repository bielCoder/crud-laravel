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
      <main>
         @if(session('add'))
            <p class="sucess">{{session('add')}}</p>
         @elseif(session('update'))
            <p class="update">{{session('update')}}</p>
         @elseif(session('remove'))
            <p class="remove">{{session('remove')}}</p>
         @endif
      </main>

     

 <form action="novo" method="post">
    @csrf
    <input type="text" name="nome" placeholder="Nome Completo">
    <input type="mail" name="email" placeholder="E-mail">
    <input type="text" name="telefone" placeholder="Telefone">
    <input type="submit" name="Enviar">
 </form>

  
   <table>
      <tr> 
         <th>Nome</th>  
         <th>Email</th> 
         <th>Telefone</th>
         <th>Ação</th> 
      </tr>
   @foreach($show as $show)      
      <tr>
         <td>{{$show -> nome}}</td>
         <td>{{$show -> email}}</td>
         <td>{{$show -> telefone}}</td>
         <td><a href="{{$show->id}}/update"><svg xmlns="http://www.w3.org/2000/svg" class="pencil" width="16" height="16" fill="currentColor"  viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>&nbsp;<a href="{{$show->id}}/delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="delete" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a></td>

      </tr>
   @endforeach

   </table>

</body>
</html>