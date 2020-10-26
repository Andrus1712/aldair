<?php

namespace App\Repositories;

use App\Models\solicitud;
use App\Repositories\BaseRepository;

/**
 * Class solicitudRepository
 * @package App\Repositories
 * @version October 26, 2020, 5:18 pm UTC
*/

class solicitudRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cedula_persona',
        'tipo',
        'descripcion',
        'fecha_solicitud',
        'estado'
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
        return solicitud::class;
    }
}
