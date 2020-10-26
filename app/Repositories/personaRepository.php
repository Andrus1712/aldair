<?php

namespace App\Repositories;

use App\Models\persona;
use App\Repositories\BaseRepository;

/**
 * Class personaRepository
 * @package App\Repositories
 * @version October 26, 2020, 5:12 pm UTC
*/

class personaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cedula',
        'nombre',
        'cargo',
        'dependencia',
        'telefono',
        'correo',
        'prvilegio'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return persona::class;
    }
}
