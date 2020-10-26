<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class persona
 * @package App\Models
 * @version October 26, 2020, 5:12 pm UTC
 *
 * @property string $cedula
 * @property string $nombre
 * @property string $cargo
 * @property string $dependencia
 * @property string $telefono
 * @property string $correo
 * @property string $prvilegio
 */
class persona extends Model
{
    use SoftDeletes;

    public $table = 'personas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'cedula',
        'nombre',
        'cargo',
        'dependencia',
        'telefono',
        'correo',
        'prvilegio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cedula' => 'string',
        'nombre' => 'string',
        'cargo' => 'string',
        'dependencia' => 'string',
        'telefono' => 'string',
        'correo' => 'string',
        'prvilegio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
