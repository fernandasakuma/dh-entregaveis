<html>
<head>
<link rel="stylesheet" href="css/app.css">
</head>
<body>
@foreach($filmes as $filme)
    {{$filme->title}} - {{$filme->genero['name']}} - 
    
    @foreach($filme->atores as $ator)
        {{$ator->first_name}} {{$ator->last_name}}<br>
    @endforeach

<br>
@endforeach

{{$filmes->links()}}
</body>
</html>