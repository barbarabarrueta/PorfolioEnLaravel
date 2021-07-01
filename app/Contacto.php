<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    // se va a unir la tabla de base de datos con las filas de los campos en el modelo
    protected $table = "contactos";
    protected $fiellable = ['id','Imail','Mensaje'];
}
