<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Booking
 * @package App\Models
 * @version June 15, 2018, 4:24 am UTC
 *
 * @property \App\Models\Brand brand
 * @property \App\Models\Car car
 * @property \App\Models\Client client
 * @property integer client_id
 * @property integer brand_id
 * @property integer car_id
 * @property integer agency_id
 * @property date start_date
 * @property date end_date
 * @property string options
 * @property string status
 */
class Booking extends Model
{
    use SoftDeletes;

    public $table = 'bookings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'client_id',
        'brand_id',
        'car_id',
        'agency_id',
        'start_date',
        'end_date',
        'nombre_jours',
        'mileage_before',
        'mileage_after',
        'booking_price',
        'options',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer',
        'brand_id' => 'integer',
        'car_id' => 'integer',
        'agency_id' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'options' => 'string',
        'nombre_jours' => 'integer',
        'mileage_before' => 'integer',
        'mileage_after' => 'integer',
        'booking_price' => 'integer',
        'status' => 'string'
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
    public function brand()
    {
        return $this->belongsTo(\App\Models\Brand::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function car()
    {
        return $this->belongsTo(\App\Models\Car::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class);
    }

     public function agency()
    {
        return $this->belongsTo(\App\Models\Agency::class);
    }
}
