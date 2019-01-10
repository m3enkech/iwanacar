<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class User
 * @package App\Models
 * @version June 7, 2018, 7:08 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Agency
 * @property \Illuminate\Database\Eloquent\Collection Brand
 * @property \Illuminate\Database\Eloquent\Collection Car
 * @property string name
 * @property string email
 * @property string password
 * @property string phone
 * @property string address
 * @property integer role_id
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'role_id',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'role_id' => 'integer',
        'remember_token' => 'string'
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
    public function agencies()
    {
        return $this->hasMany(\App\Models\Agency::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function brands()
    {
        return $this->hasMany(\App\Models\Brand::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cars()
    {
        return $this->hasMany(\App\Models\Car::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clients()
    {
        return $this->hasMany(\App\Models\Client::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoices()
    {
        return $this->hasMany(\App\Models\Invoice::class);
    }


}
