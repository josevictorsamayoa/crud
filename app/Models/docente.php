<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class docente
 * @package App\Models
 * @version May 28, 2021, 7:29 am UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property string $especialidad
 */
class docente extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = "tbdocente";
    protected $primaryKey = "iddocente";

    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'apellido',
        'especialidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'especialidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required',
        'especialidad' => 'required'
    ];

    
}
