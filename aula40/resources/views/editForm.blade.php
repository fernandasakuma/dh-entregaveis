<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>
    </head>
    <body>
        <h1 align="center">Formulário</h1>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error
                    )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (isset ($sucesso) &&  ($sucesso))   
    Filme cadastrado!
@endif

@if (isset ($erro) && ($erro))
    Erro
@endif
        <form method="POST" action="/filme/edit/{{ $filme->id}}">
            @csrf
            {{ method_field('PUT')}}
            <div class="form-group col-6 m-auto">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" name="title" value="{{$filme->title}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Classificação</label>
                <input type="text" class="form-control" name="rating" value="{{ $filme->rating}}" />
            </div>
            <div class="form-group col-6 m-auto">
                <label for="premios">Prêmios</label>
                <input type="text" class="form-control" name="awards" value="{{ $filme->awards}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="duracao">Duração</label>
                <input type="text" class="form-control" name="lenght" value="{{ $filme->lenght}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Data de estreia</label>
                <input type="date" class="form-control" name="release_date" id="data_estreia"/>
            </div>
            <br>
                  </select>
                </div>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
