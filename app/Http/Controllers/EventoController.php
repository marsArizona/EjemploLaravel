<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;

use App\Evento;
use function PHPSTORM_META\type;

class EventoController extends Controller
{


    function index(){

        return Evento::all();
    }
    function store(Request $r){
            //['tx_categoria', 'estado', 'nb_evento', 'descripcion'];

        try{

            Evento::create([
                'tx_categoria'=> $r->input('categoria'),
                'estado'=> $r->input('estado'),
                'nb_evento'=> $r->input('evento'),
                'descripcion'=> $r->input('descripcion')

            ]);


            return response()->json([

                'type' => 'success',
                'message'=> 'Evemto Creado'

            ]);


        }catch (\Exception $e){

            return response()->json([
                'type' => 'fatal',
                'message' => $e->getMessage()
            ]);
        }


    }

    function show($id){


        $evento = Evento::find(1)->get([ 'nb_evento', 'descripcion']);


        return response()->json([

            'type' => 'success',
            'message'=> $evento

        ]);
    }

    function getBoletos($id){

        $evento = Evento::find($id);


        return \response()->json([
            'boletosEvento' => $evento->boletos

        ]);

    }




}
