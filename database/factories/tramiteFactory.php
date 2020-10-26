<?php

namespace Database\Factories;

use App\Models\tramite;
use Illuminate\Database\Eloquent\Factories\Factory;

class tramiteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tramite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'solicitud_id' => $this->faker->randomDigitNotNull,
        'fechas_recepcion' => $this->faker->word,
        'fecha_recepcion' => $this->faker->word,
        'hora_recepcion' => $this->faker->word,
        'motivo' => $this->faker->word,
        'fecha_prorroga' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
