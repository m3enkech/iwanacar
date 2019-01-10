<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agency
 * @package App\Models
 * @version June 7, 2018, 5:46 pm UTC
 *
 * @property \App\Models\User user
 * @property \Illuminate\Database\Eloquent\Collection Car
 * @property string name
 * @property string phone
 * @property string city
 * @property string address
 * @property string description
 * @property integer user_id
 */
class Agency extends Model
{
    use SoftDeletes;

    public $table = 'agencies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'phone',
        'city',
        'address',
        'description',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phone' => 'string',
        'city' => 'string',
        'address' => 'string',
        'description' => 'string',
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
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cars()
    {
        return $this->hasMany(\App\Models\Car::class);
    }
}
