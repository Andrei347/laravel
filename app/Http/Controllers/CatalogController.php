<?php

namespace App\Http\Controllers;
use App\Movie;

use Illuminate\Http\Request;

class CatalogController extends Controller
{


    public function getIndex()
    {
       //$peliculas=$this->arrayPeliculas;
        $arrayPeliculas=Movie::all();
        return view('catalog.catalog', array('arrayPeliculas'=>$arrayPeliculas));
    }
    public function getShow($id)
    {
        //$pelicula=$this->arrayPeliculas[$id];
        $pelicula=Movie::findOrFail($id);
        return view('catalog.show', array('pelicula'=>$pelicula));
    }

    public function getEdit($id)
    {
        $pelicula=Movie::findOrFail($id);
        return view('catalog.edit', array('pelicula'=>$pelicula));
    }

    public function getCreate()
    {
        return view('catalog.create');
    }
    public function changeRented($id){
        $movie=Movie::findOrFaill($id);

        return view('catalog.show', array('pelicula'=>$pelicula));
    }

}
