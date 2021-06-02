<?php

namespace App\Repositories;

use App\Models\alumno;
use App\Repositories\BaseRepository;

/**
 * Class alumnoRepository
 * @package App\Repositories
 * @version May 28, 2021, 6:46 am UTC
*/

class alumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'telefono'
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
        return alumno::class;
    }
}
