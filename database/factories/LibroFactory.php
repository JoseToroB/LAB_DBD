<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'autor' => $this->faker->name(),
            'link'=> $this->faker->url,
            'fecha_publicacion' => $this->faker->date()
        ];
    }
}
