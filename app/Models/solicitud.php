<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class solicitud
 * @package App\Models
 * @version October 26, 2020, 5:18 pm UTC
 *
 * @property integer $cedula_persona
 * @property string $tipo
 * @property string $descripcion
 * @property string $fecha_solicitud
 * @property string $estado
 */
class solicitud extends Model
{
    use SoftDeletes;

    public $table = 'solicituds';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'cedula_persona',
        'tipo',
        'descripcion',
        'fecha_solicitud',
        'estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cedula_persona' => 'integer',
        'tipo' => 'string',
        'descripcion' => 'string',
        'fecha_solicitud' => 'date',
        'estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
