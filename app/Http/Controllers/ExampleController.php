<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ExampleController extends Controller
{
    public function exampleFunction(): void 
    {
        $foo= "Hello World"; // Errore: mancanza di spazio tra la dichiarazione e la variabile
        echo $foo;

        $names = [
            'mario',
            'luigi',
            'stefano',
            'giuseppe',
            'maria'
        ];
    }

    public function anotherFunction(): void 
    {
        $bar ="Goodbye"; // Errore: mancanza di spazi attorno all'operatore di assegnazione
    }

    public function someFunction( ) : string {
        return "Another example"; // Errore: mancanza di spazi attorno alle parentesi
    }

    public function someFunction2(): void {
        $user = new User();
        echo $user->getName();
    }

    public function someFunction3(): void {
        $user = new User();
        echo $user->setName("56");
    }

    public function calculate(int $a , int $b, string $operation): string
    {
        if ($operation == 'add') {
            return $a + $b;
        } elseif ($operation == 'subtract') {
            return $a - $b;
        } elseif ($operation == 'multiply') {
            return $a * $b;
        } elseif ($operation == 'divide') {
            if ($b == 0) {
                return 'Error: Division by zero';
            }
            return $a / $b;
        } else {
            return 'Error: Unknown operation';
        }
    }

    public function generate($a): void {
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
        if ($a == 1) { echo "Step 1"; }
    }

    public function greet(): void {
        $unused = "Ciao";
        echo "Benvenuto!";
    }
}
