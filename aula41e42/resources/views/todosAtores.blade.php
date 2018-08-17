<html>
<head>
<link rel="stylesheet" href="css/app.css">
</head>
<body>
    @foreach($atoresblade as $ator)
        {{$ator->first_name}} {{$ator->last_name}}<br>
    @endforeach

{{$atoresblade->links()}}
</body>
</html>