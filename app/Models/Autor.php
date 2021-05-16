<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $fillable = ["Nom"];

    //Relacio one to many
    public function noticies(){
        return $this->hasMany(Noticia::class,"noticies");
    }
}
