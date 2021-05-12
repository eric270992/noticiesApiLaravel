<?php

namespace Database\Factories;

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
        return [
            'Titol'=>$this->faker->titol,
            'Contingut'=>$this->faker->contingut,
            'Data_publicacio'=>$this->faker->now(),
            'imatge_id'=>$this->faker->integer,
        ];
    }
}
