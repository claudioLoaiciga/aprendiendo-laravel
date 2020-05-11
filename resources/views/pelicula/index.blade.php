<h1>{{$titulo}}</h1>
<p>(accion index del controlador PeliculasController)</p>

@if (isset($pagina))
   <h3> La pagina es {{$pagina}} </h3>
@endif


{{--<a href="{{action('PeliculaController@detalle')}}">ir al detalle</a>--}}
<a href="{{route('detalle.pelicula')}}">ir al detalle</a>
