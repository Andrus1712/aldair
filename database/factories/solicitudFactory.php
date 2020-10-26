<?php

namespace Database\Factories;

use App\Models\solicitud;
use Illuminate\Database\Eloquent\Factories\Factory;

class solicitudFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = solicitud::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cedula_persona' => $this->faker->randomDigitNotNull,
        'tipo' => $this->faker->word,
        'descripcion' => $this->faker->word,
        'fecha_solicitud' => $this->faker->word,
        'estado' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
