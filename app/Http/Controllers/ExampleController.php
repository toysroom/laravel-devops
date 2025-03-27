<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function exampleFunction()
    {
        $foo = "Hello World"; // Errore: mancanza di spazio tra la dichiarazione e la variabile
        echo $foo;

        $names = [
            'mario',
            'luigi',
            'stefano',
            'franco',
        ];
    }

    public function anotherFunction(){
        $bar= "Goodbye"; // Errore: mancanza di spazi attorno all'operatore di assegnazione
    }

    public function someFunction(): string
    {
        return "Another example" // Errore: mancanza di spazi attorno alle parentesi
    }

    // public function calculate($a: int , $b: int, $operation: string)
    // {
    //     if ($operation == 'add') {
    //         return $a + $b;
    //     } elseif ($operation == 'subtract') {
    //         return $a - $b;
    //     } elseif ($operation == 'multiply') {
    //         return $a * $b;
    //     } elseif ($operation == 'divide') {
    //         if ($b == 0) {
    //             return 'Error: Division by zero';
    //         }
    //         return $a / $b;
    //     } else {
    //         return 'Error: Unknown operation';
    //     }
    // }
}
