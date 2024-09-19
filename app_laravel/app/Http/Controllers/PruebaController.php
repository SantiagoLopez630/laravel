<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index()
    {
        return view("home");    
    }
    public function mision()
    {
        return view("prueba.vista1");
    }

    public function vision()
    {
        return view("prueba.vista2");
    }

    public function about_us()
    {
        return view("prueba.vista3");
    }

    public function mostrar_calculadora()
{
    return view("prueba.calculadora");
}

public function calcular(Request $request)
{
    $numero1=$request->input("numero1");
    $numero2=$request->input("numero2");
    $operacion = $request->input('operacion');
    $resultado=null;

    switch($operacion)
    {
        case 'suma':
            $resultado = $numero1 + $numero2;
            break;
        
        case 'resta':
            $resultado = $numero1 - $numero2;
            break;

        case 'multiplicacion':
            $resultado = $numero1 * $numero2;
            break;    

        case 'divicion': 
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                return "Error: División por cero no permitida.";
            }
            break;
        default:
            return "Operación no válida.";
    }

    return view('prueba.calculadora', compact('resultado'));
}
}

