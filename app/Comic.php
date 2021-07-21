<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //aggiungo fillable per importare in automatico tutti i dati inseriti nel form
    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
        'slug'
    ];
}
