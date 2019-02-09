<?php

namespace Modules\Crm\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Address
 * @package Modules\Crm\Models\Core
 * @version February 2, 2019, 7:07 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection RelationsHasAddress
 * @property \Illuminate\Database\Eloquent\Collection ticketsThreadsTasks
 * @property \Illuminate\Database\Eloquent\Collection ticketsThreads
 * @property string address_1
 * @property string address_2
 * @property string zipcode
 * @property integer city_id
 * @property integer country_id
 */
class Address extends Model
{
    use SoftDeletes;

    public $table = 'addresses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'address_1',
        'address_2',
        'zipcode',
        'city_id',
        'country_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'address_1' => 'string',
        'address_2' => 'string',
        'zipcode' => 'string',
        'city_id' => 'integer',
        'country_id' => 'integer'
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
    public function relationsHasAddresses()
    {
        return $this->hasMany(\Modules\Crm\Models\RelationsHasAddress::class);
    }
}
