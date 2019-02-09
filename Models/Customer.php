<?php

namespace Modules\Core\Models\Core;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package Modules\Core\Models\Core
 * @version February 2, 2019, 7:08 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Invoice
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection relationsHasAddresses
 * @property \Illuminate\Database\Eloquent\Collection ticketsThreadsTasks
 * @property \Illuminate\Database\Eloquent\Collection TicketsThread
 * @property integer company_id
 * @property integer relation_id
 * @property string customer_no
 * @property string coc_no
 * @property string vat_no
 */
class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'company_id',
        'relation_id',
        'customer_no',
        'coc_no',
        'vat_no'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'relation_id' => 'integer',
        'customer_no' => 'string',
        'coc_no' => 'string',
        'vat_no' => 'string'
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
    public function invoices()
    {
        return $this->hasMany(\Modules\Core\Models\Core\Invoice::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ticketsThreads()
    {
        return $this->hasMany(\Modules\Core\Models\Core\TicketsThread::class);
    }
}
