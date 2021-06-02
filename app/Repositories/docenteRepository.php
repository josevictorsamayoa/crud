<?php

namespace App\Repositories;

use App\Models\docente;
use App\Repositories\BaseRepository;

/**
 * Class docenteRepository
 * @package App\Repositories
 * @version May 28, 2021, 7:29 am UTC
*/

class docenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'especialidad'
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
        return docente::class;
    }
}
