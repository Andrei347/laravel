@extends('layouts.master')

@section('menu')
    @parent
@endsection
@section('content')

    <h2>Añadir pelicula</h2>
    <br>
    <form method="post" action="">
        <label class="description" for="title">Titulo: </label>
        <input id="title" name="title" class="element text medium" type="text" maxlength="255" value=""/>
        <br><br>
        <label class="description" for="year">Año: </label>
        <input id="year" name="year" class="element text medium" type="text" maxlength="255" value=""/>
        <br><br>
        <label class="description" for="director">Director: </label>
        <input id="director" name="director" class="element text medium" type="text" maxlength="255" value=""/>
        <br><br>
        <label class="description" for="poster">Poster: </label>
        <input id="poster" name="poster" class="element text medium" type="text" maxlength="255" value=""/>
        <br><br>
        <label class="description" for="synopsis">Resumen: </label>
        <textarea id="synopsis" name="synopsis" class="element textarea medium"></textarea>
        <br><br>
        <input id="saveForm" class="button_text" type="submit" name="submit" value="Añadir Pelicula" />
    </form>

@endsection

