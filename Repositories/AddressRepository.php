<?php

namespace Modules\Core\Repositories;

use Modules\Core\Models\Core\Address;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AddressRepository
 * @package Modules\Core\Repositories\Core
 * @version February 2, 2019, 7:07 pm UTC
 *
 * @method Address findWithoutFail($id, $columns = ['*'])
 * @method Address find($id, $columns = ['*'])
 * @method Address first($columns = ['*'])
*/
class AddressRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'address_1',
        'address_2',
        'zipcode',
        'city_id',
        'country_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Address::class;
    }
}
