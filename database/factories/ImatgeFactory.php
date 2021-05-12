<?php

namespace Database\Factories;

use App\Models\Imatge;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImatgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Imatge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "Nom"=>Str::random(10),
        ];
    }
}
