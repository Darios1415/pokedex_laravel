<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pokedex extends Model
{
    use HasFactory;
    protected $table = "pokedexes";
    protected $primaryKey = 'id';
    protected $fillable = ['idp', 'nombre', 'img'];
}
