<?php

namespace App\Repositories;

use App\Models\Reglage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ReglageRepository
 * @package App\Repositories
 * @version July 28, 2018, 4:54 pm UTC
 *
 * @method Reglage findWithoutFail($id, $columns = ['*'])
 * @method Reglage find($id, $columns = ['*'])
 * @method Reglage first($columns = ['*'])
*/
class ReglageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type_reglage',
        'date_reglage',
        'montant',
        'car_id',
        'agency_id',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Reglage::class;
    }
}
