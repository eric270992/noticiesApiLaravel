<?php

namespace Database\Factories;

use App\Models\Autor;
use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Noticia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $autors_id = Autor::get()->pluck('id')->toArray();
        return [
            'Titol'=>$this->faker->text(15),
            'Contingut'=>$this->faker->text(700),
            'Data_publicacio'=>now(),
            'autor_id'=>$this->faker->randomElement($autors_id)
        ];
    }
}
