<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Invoice
 * @package App\Models
 * @version July 18, 2018, 4:14 pm UTC
 *
 * @property \App\Models\Agency agency
 * @property \App\Models\Client client
 * @property \App\Models\User user
 * @property integer client_id
 * @property integer agency_id
 * @property integer user_id
 * @property date create_date
 * @property string ref_invoice
 */
class Invoice extends Model
{
    use SoftDeletes;

    public $table = 'invoices';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'client_id',
        'agency_id',
        'user_id',
        'create_date',
        'ref_invoice'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer',
        'agency_id' => 'integer',
        'user_id' => 'integer',
        'create_date' => 'date',
        'ref_invoice' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function agency()
    {
        return $this->belongsTo(\App\Models\Agency::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
