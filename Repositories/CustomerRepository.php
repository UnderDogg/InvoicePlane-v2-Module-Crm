<?php

namespace Modules\Crm\Repositories;

use Modules\Crm\Models\Customer;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CustomerRepository
 * @package Modules\Crm\Repositories
 * @version February 2, 2019, 7:08 pm UTC
 *
 * @method Customer findWithoutFail($id, $columns = ['*'])
 * @method Customer find($id, $columns = ['*'])
 * @method Customer first($columns = ['*'])
*/
class CustomerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_id',
        'relation_id',
        'customer_no',
        'coc_no',
        'vat_no'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Customer::class;
    }
}
