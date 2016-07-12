<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sintegra extends Model
{
    //
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sintegra';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['idusuario','cnpj', 'resultado_json'];

   
}
