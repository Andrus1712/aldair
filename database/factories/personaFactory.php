<?php

namespace Database\Factories;

use App\Models\persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class personaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cedula' => $this->faker->word,
        'nombre' => $this->faker->word,
        'cargo' => $this->faker->word,
        'dependencia' => $this->faker->word,
        'telefono' => $this->faker->word,
        'correo' => $this->faker->word,
        'prvilegio' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
