<h1>Crear una fruta</h1>
<form action="{{action('frutaController@save')}}" method="POST">
    {{ csrf_field() }}
    <label for="nombre">nombre</label>
    <input type="text" name="nombre">
    <br/>
    <br/>
    <label for="descripcion">descripcion</label>
    <input type="text" name="descripcion">
    <br/>
    <br/>
    <label for="precio">precio</label>
    <input type="numbergiy" name="precio">
    <br/>
    <br/>
    <input type="submit" value="Guardar">
</form>
