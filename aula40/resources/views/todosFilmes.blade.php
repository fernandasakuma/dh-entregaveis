@if(isset($edicaoSucesso) && $edicaoSucesso)
  Filme atualizado com sucesso!
@endif

<br><br>

@foreach($filmes as $filme)
{{$filme->title}} - {{$filme->genero["name"]}}
<a href="/filme/edit/{{$filme->id}}">Editar</a> -
<a href="/filme/delete/{{$filme->id}}">Excluir</a>
@endforeach