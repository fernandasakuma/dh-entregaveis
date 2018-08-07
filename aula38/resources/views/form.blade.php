
<ol>
@if ( count($errors) > 0 )
 <div class="alert alert-danger">
  <ul>
@foreach ($errors->all() as $error)
 <li>{{$error}}</li>
@endforeach
 </ul>
 </div>
@endif

<form method="post" action="/adicionar">
{{csrf_field()}}
Title: <input name="title"/></br>
Rating:<input name="rating" /></br>
<button type="submit">Enviar</button>
</form>
</ol>