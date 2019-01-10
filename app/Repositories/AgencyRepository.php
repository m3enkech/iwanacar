<?php

namespace App\Repositories;

use App\Models\Agency;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AgencyRepository
 * @package App\Repositories
 * @version June 7, 2018, 5:46 pm UTC
 *
 * @method Agency findWithoutFail($id, $columns = ['*'])
 * @method Agency find($id, $columns = ['*'])
 * @method Agency first($columns = ['*'])
*/
class AgencyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone',
        'city',
        'address',
        'description',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Agency::class;
    }
}
