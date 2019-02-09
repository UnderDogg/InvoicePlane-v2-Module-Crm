<?php

namespace Modules\Crm\Repositories;

use Modules\Crm\Models\Vendor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VendorRepository
 * @package Modules\Crm\Repositories
 * @version February 2, 2019, 7:09 pm UTC
 *
 * @method Vendor findWithoutFail($id, $columns = ['*'])
 * @method Vendor find($id, $columns = ['*'])
 * @method Vendor first($columns = ['*'])
*/
class VendorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_id',
        'relation_id',
        'vendor_no',
        'coc_no',
        'vat_no'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vendor::class;
    }
}
