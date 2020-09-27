<?php

namespace App\Repositories;

use App\Models\Entreprise;
use App\Repositories\BaseRepository;

/**
 * Class EntrepriseRepository
 * @package App\Repositories
 * @version September 25, 2020, 7:02 pm UTC
*/

class EntrepriseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom',
        'ninea',
        'telephone',
        'adresse',
        'budget'
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
        return Entreprise::class;
    }
}
