<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 * @package App\Models
 * @version June 15, 2018, 4:28 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Booking
 * @property string firstName
 * @property string lastName
 * @property string email
 * @property string phone
 * @property string cin
 * @property string status
 * @property string platform
 */
class Client extends Model
{
    use SoftDeletes;

    public $table = 'clients';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'firstName',
        'lastName',
        'email',
        'phone',
        'cin',
        'status',
        'platform'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'firstName' => 'string',
        'lastName' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'cin' => 'string',
        'status' => 'string',
        'platform' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

}
