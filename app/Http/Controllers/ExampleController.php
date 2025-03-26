<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function exampleFunction(): string {
        $foo = "Hello World"; // Errore: mancanza di spazio tra la dichiarazione e la variabile
        echo $foo;
    }

    public function anotherFunction(): string
    {
        $bar= "Goodbye"; // Errore: mancanza di spazi attorno all'operatore di assegnazione
    }

    public function someFunction(): string{
        return "Another example"; // Errore: mancanza di spazi attorno alle parentesi
    }
}
