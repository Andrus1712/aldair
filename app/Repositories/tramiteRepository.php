<?php

namespace App\Repositories;

use App\Models\tramite;
use App\Repositories\BaseRepository;

/**
 * Class tramiteRepository
 * @package App\Repositories
 * @version October 26, 2020, 5:22 pm UTC
*/

class tramiteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'solicitud_id',
        'fechas_recepcion',
        'fecha_recepcion',
        'hora_recepcion',
        'motivo',
        'fecha_prorroga'
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
        return tramite::class;
    }
}
