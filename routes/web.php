<?php

use App\Models\Alumno;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('alumnos',function(){
    $alumno= new Alumno();

    $alumno->nombre= 'Marcos';
    $alumno->save();

    return $alumno;
});