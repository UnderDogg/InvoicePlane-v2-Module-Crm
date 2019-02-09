<?php

namespace Modules\Core\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RelationAddress
 * @package Modules\Core\Models\Core
 * @version February 2, 2019, 7:08 pm UTC
 *
 * @property \Modules\Core\Models\Core\Address address
 * @property \Modules\Core\Models\Core\Relation relation
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection ticketsThreadsTasks
 * @property \Illuminate\Database\Eloquent\Collection ticketsThreads
 * @property integer relation_id
 * @property integer address_id
 * @property boolean is_active
 * @property string address_type
 */
class RelationAddress extends Model
{
    use SoftDeletes;

    public $table = 'relations_has_addresses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'relation_id',
        'address_id',
        'is_active',
        'address_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'relation_id' => 'integer',
        'address_id' => 'integer',
        'is_active' => 'boolean',
        'address_type' => 'string'
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
    public function address()
    {
        return $this->belongsTo(\Modules\Core\Models\Core\Address::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function relation()
    {
        return $this->belongsTo(\Modules\Core\Models\Core\Relation::class);
    }
}
