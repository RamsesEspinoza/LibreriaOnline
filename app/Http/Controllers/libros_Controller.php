<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\n_libros;
class libros_Controller extends Controller
{
    public function lista_libros(){
        $libros = n_libros::all();

        return $libros;
    }
}