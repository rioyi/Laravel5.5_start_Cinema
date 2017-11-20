<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	//Eloquent asume que tiene que almacenar en al tabla movies, pero puede especificar de esta forma:
	protected $table = "movies"
}
