<?php

namespace Modules\Core\Repositories;

use Modules\Core\Models\Core\RelationAddress;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RelationAddressRepository
 * @package Modules\Core\Repositories\Core
 * @version February 2, 2019, 7:08 pm UTC
 *
 * @method RelationAddress findWithoutFail($id, $columns = ['*'])
 * @method RelationAddress find($id, $columns = ['*'])
 * @method RelationAddress first($columns = ['*'])
*/
class RelationAddressRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'relation_id',
        'address_id',
        'is_active',
        'address_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RelationAddress::class;
    }
}
