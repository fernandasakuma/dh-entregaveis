

@foreach($filmes as $filme)
{{$filme->title}} - <a href="/filme/edit/{{filme->id}}">Editar</a> - <a href="/filme/delete/{{filme->id}}">Excluir</a>
@endforeach