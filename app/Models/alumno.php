<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class alumno
 * @package App\Models
 * @version May 28, 2021, 6:46 am UTC
 *
 * @property string $nombre
 * @property string $apellido
 * @property string $telefono
 */
class alumno extends Model
{
    use SoftDeletes;

    use HasFactory;

    protected $table = "tbalumno";
    protected $primaryKey = "idalumno";

    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'apellido',
        'telefono'
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
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellido' => 'required'
    ];

    
}
