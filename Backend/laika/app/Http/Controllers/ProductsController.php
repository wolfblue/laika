<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller{

    /********************************************************************************** */
    // CONSULTAR PRODUCTOS DE UNA CATEGORÍA
    /********************************************************************************** */

    public function apiGetProducts(Request $request){

        //  Parametros de entrada
        $categoria = $request->categoria;

        //  Variables iniciales 

        $response = [];
        $productos = [];

        //  Consultar productos

        switch($categoria){

            default:

                array_push($productos,"Concentrado");
                array_push($productos,"Humedo");
                array_push($productos,"Donaciones");
                array_push($productos,"Dietas Naturales");
                array_push($productos,"Regalos");

            break;

        }

        // Generar respuesta

        array_push(
            $response,
            [
                "productos" => $productos
            ]
        );

        //  Retornar usuario
        return response()->json($response);

    }

}