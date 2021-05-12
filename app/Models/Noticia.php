<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['Titol','Data_publicacio','Contingut','imatge_id'];



    public function categories(){
        return $this->belongsToMany(Categoria::class,'categoria_noticies');
    }
}
