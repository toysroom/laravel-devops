<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function exampleFunction() {
        $foo = "Hello World"; // Errore: mancanza di spazio tra la dichiarazione e la variabile
        echo $foo;
    }

    public function anotherFunction()
    {
        $bar= "Goodbye"; // Errore: mancanza di spazi attorno all'operatore di assegnazione
    }

    public function someFunction(){
        return "Another example"; // Errore: mancanza di spazi attorno alle parentesi
    }
}
