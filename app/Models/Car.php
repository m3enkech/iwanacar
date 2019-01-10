<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Car
 * @package App\Models
 * @version June 7, 2018, 5:53 pm UTC
 *
 * @property \App\Models\Agency agency
 * @property \App\Models\Brand brand
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection Booking
 * @property string name
 * @property string year
 * @property integer brand_id
 * @property integer user_id
 * @property integer agency_id
 */
class Car extends Model
{
    use SoftDeletes;

    public $table = 'cars';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'year',
        'brand_id',
        'user_id',
        'agency_id',
        'price_unit',
        'price_long_term',
        'price_unit_agencies',
        'image',
        'booking_status',
        'mileage',
        'matricule',
        'engine',
        'prix_achat',
        'insurance_name',
        'insurance_number',
        'insurance_date',
        'carte_grise',
        'seats',
        'transmission',
        'doors',
        'color',
        'vidange'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'year' => 'string',
        'brand_id' => 'integer',
        'user_id' => 'integer',
        'agency_id' => 'integer',
        'price_unit' => 'integer',
        'price_long_term' => 'integer',
        'price_unit_agencies' => 'integer',
        'image' => 'string',
        'booking_status' => 'boolean',
        'mileage' => 'biginteger',
        'matricule' => 'string',
        'engine' => 'string',
        'prix_achat' => 'integer',
        'insurance_name' => 'string',
        'insurance_number' => 'string',
        'insurance_date' => 'date',
        'carte_grise' => 'string',
        'seats' => 'integer',
        'transmission' => 'string',
        'doors' => 'string',
        'color' => 'string',
        'vidange' => 'string'
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
    public function brand()
    {
        return $this->belongsTo(\App\Models\Brand::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class);
    }

   
}
