<?php

namespace App\Repositories;

use App\Models\typeOperation;
use App\Repositories\BaseRepository;

/**
 * Class typeOperationRepository
 * @package App\Repositories
 * @version September 25, 2020, 6:36 pm UTC
*/

class typeOperationRepository extends BaseRepository
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
        return typeOperation::class;
    }
}
