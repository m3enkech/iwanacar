<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reglage
 * @package App\Models
 * @version July 28, 2018, 4:54 pm UTC
 *
 * @property \App\Models\Agency agency
 * @property \App\Models\Car car
 * @property \App\Models\User user
 * @property string type_reglage
 * @property date date_reglage
 * @property integer montant
 * @property integer car_id
 * @property integer agency_id
 * @property integer user_id
 */
class Reglage extends Model
{
    use SoftDeletes;

    public $table = 'reglages';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'type_reglage',
        'date_reglage',
        'montant',
        'car_id',
        'agency_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_reglage' => 'string',
        'date_reglage' => 'date',
        'montant' => 'integer',
        'car_id' => 'integer',
        'agency_id' => 'integer',
        'user_id' => 'integer'
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
    public function car()
    {
        return $this->belongsTo(\App\Models\Car::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
