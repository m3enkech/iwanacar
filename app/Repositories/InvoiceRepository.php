<?php

namespace App\Repositories;

use App\Models\Invoice;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InvoiceRepository
 * @package App\Repositories
 * @version July 18, 2018, 4:14 pm UTC
 *
 * @method Invoice findWithoutFail($id, $columns = ['*'])
 * @method Invoice find($id, $columns = ['*'])
 * @method Invoice first($columns = ['*'])
*/
class InvoiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'client_id',
        'agency_id',
        'user_id',
        'create_date',
        'ref_invoice'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Invoice::class;
    }
}
