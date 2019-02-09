<?php

namespace Modules\Core\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vendor
 * @package Modules\Core\Models\Core
 * @version February 2, 2019, 7:09 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Expense
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection relationsHasAddresses
 * @property \Illuminate\Database\Eloquent\Collection ticketsThreadsTasks
 * @property \Illuminate\Database\Eloquent\Collection ticketsThreads
 * @property integer company_id
 * @property integer relation_id
 * @property string vendor_no
 * @property string coc_no
 * @property string vat_no
 */
class Vendor extends Model
{
    use SoftDeletes;

    public $table = 'vendors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'company_id',
        'relation_id',
        'vendor_no',
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
        'vendor_no' => 'string',
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
    public function expenses()
    {
        return $this->hasMany(\Modules\Core\Models\Core\Expense::class);
    }
}
