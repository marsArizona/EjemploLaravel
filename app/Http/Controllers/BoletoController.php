<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boleto;

class BoletoController extends Controller
{
    public function store(Request $r){

        Boleto::create([
            'qr'        => $r->qr,
            'precio'    => $r->precio,
            'evento_id' => $r->evento
        ]);


        return response()->json([

            'msg' => 'boleto creado'

        ]);

    }


    /*
     *
        $table->unsignedInteger('evento_id');
            $table->string('qr');
            $table->integer('precio');
     * */
}
