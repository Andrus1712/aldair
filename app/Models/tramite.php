<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tramite
 * @package App\Models
 * @version October 26, 2020, 5:22 pm UTC
 *
 * @property integer $solicitud_id
 * @property string $fechas_recepcion
 * @property string $fecha_recepcion
 * @property time $hora_recepcion
 * @property string $motivo
 * @property string $fecha_prorroga
 */
class tramite extends Model
{
    use SoftDeletes;

    public $table = 'tramites';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'solicitud_id',
        'fechas_recepcion',
        'fecha_recepcion',
        'hora_recepcion',
        'motivo',
        'fecha_prorroga'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'solicitud_id' => 'integer',
        'fechas_recepcion' => 'date',
        'fecha_recepcion' => 'date',
        'motivo' => 'string',
        'fecha_prorroga' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
