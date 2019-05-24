<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';
    protected $fillable =['tx_categoria', 'estado', 'nb_evento', 'descripcion'];
    protected $primaryKey = 'id_evento';






    public function boletos(){

        return $this->hasMany('App\Boleto', 'evento_id', 'id_evento');

    }

    public function createEvento(Request $r){



    }

    /*
     *


       $table->increments('id_evento');
            $table->string('tx_categoria');
            $table->tinyInteger('estado');
            $table->string('nb_evento');
            $table->text('descripcion');
     * */
}
