<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['Titol','Data_publicacio','Contingut'];

    protected $table="Noticies";


    public function imatges(){
        return $this->belongsToMany(Imatge::class,'imatge_noticia');
    }

    public function categories(){
        return $this->belongsToMany(Categoria::class,'categoria_noticies');
    }
}
