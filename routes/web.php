<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/mi-nombre', function(){
    return "Santiago";
});

Route::get('/contact', function(){
     return view('form');
});

Route::get('/php-basico', function(){


    echo "<h1 style = 'color: red;'> Aprendiendo PHP </h1>";


    $name = "Santiago Jacome";
    $height = 1.6;
    $isLogic = true;
    $age = 19;


    echo "<h3>  " . $name . "</h3>";

    echo "<br><br><br> *********************ESTRUCTURAS DE CONTROL********************* <br><br><br>";

    $mensaje = "Soy $name y tengo $age años.". validateAge($age);
     
    if ($age >= 18) {
        echo "  Eres mayor de edad";
    } else {
        echo "  Eres menor de edad";
    }
    $mensaje .= $isLogic ? " y estoy logueado" : " y no estoy logueado";

    echo "<br><br><br> Mensaje final: $mensaje";

     echo "<br><br><br> *********************ESTRUCTURAS DE CONTROL********************* <br><br><br>";

     // Diccionarios 
      $pc = [
        "nombre" => "Macbook Pro",
        "price" => 2000,
        "color" => "gris",
    ];
     $teclado = [
        "nombre" => "Logitech K380",
        "price" => 50,
        "color" => "negro",
    ];
    $portatil = [
        "nombre" => "HP Pavilion",
        "price" => 800,
        "color" => "negro",
    ];
    $listadeproductos = [$pc, $teclado, $portatil];
      
    //For 
    foreach ($listadeproductos as $item ){
        echo $item ["nombre"] . " cuesta " . $item["price"] . " y es de color " . $item["color"] . "<br>";
    }

});
 
function validateAge($age) {
    if ($age >= 18) {
        return "Eres mayor de edad";
    } else {
        return "Eres menor de edad";
    }
}