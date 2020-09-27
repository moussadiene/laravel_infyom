<?php

namespace App\Repositories;

use App\Models\TypeCompte;
use App\Repositories\BaseRepository;

/**
 * Class TypeCompteRepository
 * @package App\Repositories
 * @version September 25, 2020, 5:20 pm UTC
*/

class TypeCompteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libelle'
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
        return TypeCompte::class;
    }
}
