<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['Titol','Data_publicacio','Contingut','autor_id'];

    protected $table="Noticies";

    //Relació One to Many
    public function autor(){
        return $this->belongsTo(Autor::class);
    }


    //Relació Many to Many
    public function imatges(){
        return $this->belongsToMany(Imatge::class,'imatge_noticia');
    }

    //Relació Many to Many
    public function categories(){
        return $this->belongsToMany(Categoria::class,'categoria_noticia');
    }
}
