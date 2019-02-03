@extends('layouts.master')

@section('menu')
    @parent
@endsection
@section('content')
    <h2>Modificar pelicula</h2>
    <br>
    <form method="post" action="">
        <input type="hidden" name="metodo" value='{{method_field('PUT')}}'/>
        <br>
        <label class="description" for="title">Titulo: </label>
        <input id="title" name="title" class="element text medium" type="text" maxlength="255" value="{{$pelicula->title}}"/>
        <br><br>
        <label class="description" for="year">Año: </label>
        <input id="year" name="year" class="element text medium" type="text" maxlength="255" value="{{$pelicula->year}}"/>
        <br><br>
        <label class="description" for="director">Director: </label>
        <input id="director" name="director" class="element text medium" type="text" maxlength="255" value="{{$pelicula->director}}"/>
        <br><br>
        <label class="description" for="poster">Poster: </label>
        <input id="poster" name="poster" class="element text medium" type="text" maxlength="255" value="{{$pelicula->poster}}"/>
        <br><br>
        <label class="description" for="synopsis">Resumen: </label>
        <textarea id="synopsis" name="synopsis" class="element textarea">{{$pelicula->synopsis}}</textarea>
        <br><br>
        <input id="saveForm" class="button_text" type="submit" name="submit" value="Modificar Pelicula" />
    </form>
@endsection

