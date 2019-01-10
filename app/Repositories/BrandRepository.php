<?php

namespace App\Repositories;

use App\Models\Brand;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BrandRepository
 * @package App\Repositories
 * @version June 7, 2018, 5:53 pm UTC
 *
 * @method Brand findWithoutFail($id, $columns = ['*'])
 * @method Brand find($id, $columns = ['*'])
 * @method Brand first($columns = ['*'])
*/
class BrandRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Brand::class;
    }
}
