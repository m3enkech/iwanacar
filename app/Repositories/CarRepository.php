<?php

namespace App\Repositories;

use App\Models\Car;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CarRepository
 * @package App\Repositories
 * @version June 7, 2018, 5:53 pm UTC
 *
 * @method Car findWithoutFail($id, $columns = ['*'])
 * @method Car find($id, $columns = ['*'])
 * @method Car first($columns = ['*'])
*/
class CarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'year',
        'brand_id',
        'user_id',
        'agency_id',
        'booking_status',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Car::class;
    }
}
