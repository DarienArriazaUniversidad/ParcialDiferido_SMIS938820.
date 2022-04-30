<?php

namespace base\Factories;

use Illuminate\base\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\base\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'cod_libro'=> $this->faker->text(200),
            'isbn'=> $this->faker->text(200),
            'titulo'=> $this->faker->text(20),
            'annio_publicacion'=> $this->faker->date(200),
            'precio_venta'=> $this->faker->text(20),
            'descripcion'=> $this->faker->text(20),

        ];
    }
}
