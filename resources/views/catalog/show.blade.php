@extends('layouts.master')

@section('menu')
    @parent
@endsection
@section('content')
    <div class="row">

        <div class="col-sm-4">
            <img src="{{$pelicula->poster}}"/>
        </div>
        <div class="col-sm-8">
            <h2>{{$pelicula->title}}</h2>
            <p><b>Año:</b> {{$pelicula->year}}</p>
            <p><b>Director:</b> {{$pelicula->director}}</p>
            <p>{{$pelicula->synopsis}}</p>

            @if($pelicula->rented)
                <p><b>Estado:</b> Pelicula actualmente alquilada</p>
                @php
                    $class="btn btn-danger";
                    $texto="Devolver";
                @endphp
            @else
                <p><b>Estado:</b> Pelicula en stock</p>
                @php
                    $class="btn btn-success";
                    $texto="Alquilar";
                @endphp
            @endif
            <form action="{{url('catalog/changeRented/'.$pelicula->id)}}">
                {{method_field('PUT')}}
                @csrf
                <button type="button" class="{{$class}}">{{$texto}}</button>
            </form>
             <a href="/catalog/edit/{{$pelicula->id}}"><button type="button" class="btn btn-warning"><i class="fas fa-pen"></i> Editar</button></a> <a href="/catalog"><button type="button" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Volver al listado</button></a>
        </div>
    </div>
@endsection
