@extends('layouts.master')

@section('menu')
    @parent
@endsection
@section('content')
    <div class="row">

        <div class="col-sm-4">
            <img src="{{$pelicula['poster']}}"/>
        </div>
        <div class="col-sm-8">
            <h2>{{$pelicula['title']}}</h2>
            <p><b>Año:</b> {{$pelicula['year']}}</p>
            <p><b>Director:</b> {{$pelicula['director']}}</p>
            <p>{{$pelicula['synopsis']}}</p>

            @if($pelicula['rented']!=false)
                <p><b>Estado:</b> Pelicula disponible</p>
                <a><button type="button" class="btn btn-primary">Alquilar pelicula</button></a>
            @else
                <p><b>Estado:</b> Pelicula Alquilada</p>
                <a><button type="button" class="btn btn-danger">Devolver pelicula</button></a>
            @endif
             <a href="/catalog/edit/{{$id}}"><button type="button" class="btn btn-warning"><i class="fas fa-pen"></i> Editar</button></a> <a href="/catalog"><button type="button" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Volver al listado</button></a>
        </div>
    </div>
@endsection
