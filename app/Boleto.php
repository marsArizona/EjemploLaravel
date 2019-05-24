<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{

    protected  $table = 'boleto';
    protected  $fillable = ['qr', 'precio', 'evento_id'];
    protected  $primaryKey = 'id_boleto';

}
