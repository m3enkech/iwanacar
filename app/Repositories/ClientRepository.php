<?php

namespace App\Repositories;

use App\Models\Client;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClientRepository
 * @package App\Repositories
 * @version June 15, 2018, 4:28 am UTC
 *
 * @method Client findWithoutFail($id, $columns = ['*'])
 * @method Client find($id, $columns = ['*'])
 * @method Client first($columns = ['*'])
*/
class ClientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'cin',
        'status',
        'platform'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Client::class;
    }
}
