<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table="categories";

    protected $fillable=['nom','descripcio'];

    //Establim la relació de Many to May de noticia i categories
    //Recuperar les noticies de la categoria.
    public function noticies(){
        return $this->belongsToMany(Noticia::class,'categoria_noticia');
    }
}
