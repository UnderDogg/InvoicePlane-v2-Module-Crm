<?php

namespace Modules\Crm\Http\Controllers;

use Modules\Crm\DataTables\RelationAddressDataTable;

use Modules\Crm\Http\Requests\CreateRelationAddressRequest;
use Modules\Crm\Http\Requests\UpdateRelationAddressRequest;
use Modules\Crm\Repositories\RelationAddressRepository;
use Flash;
use Modules\Core\Http\Controllers\Controller as CoreController;
use Response;

class RelationAddressController extends CoreController
{
    /** @var  RelationAddressRepository */
    private $relationAddressRepository;

    public function __construct(RelationAddressRepository $relationAddressRepo)
    {
        $this->relationAddressRepository = $relationAddressRepo;
    }

    /**
     * Display a listing of the RelationAddress.
     *
     * @param RelationAddressDataTable $relationAddressDataTable
     * @return Response
     */
    public function index(RelationAddressDataTable $relationAddressDataTable)
    {
        return $relationAddressDataTable->render('admincp.core.relation_addresses.index');
    }

    /**
     * Show the form for creating a new RelationAddress.
     *
     * @return Response
     */
    public function create()
    {
        return view('admincp.core.relation_addresses.create');
    }

    /**
     * Store a newly created RelationAddress in storage.
     *
     * @param CreateRelationAddressRequest $request
     *
     * @return Response
     */
    public function store(CreateRelationAddressRequest $request)
    {
        $input = $request->all();

        $relationAddress = $this->relationAddressRepository->create($input);

        Flash::success('Relation Address saved successfully.');

        return redirect(route('admincp.core.relationAddresses.index'));
    }

    /**
     * Display the specified RelationAddress.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $relationAddress = $this->relationAddressRepository->findWithoutFail($id);

        if (empty($relationAddress)) {
            Flash::error('Relation Address not found');

            return redirect(route('admincp.core.relationAddresses.index'));
        }

        return view('admincp.core.relation_addresses.show')->with('relationAddress', $relationAddress);
    }

    /**
     * Show the form for editing the specified RelationAddress.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $relationAddress = $this->relationAddressRepository->findWithoutFail($id);

        if (empty($relationAddress)) {
            Flash::error('Relation Address not found');

            return redirect(route('admincp.core.relationAddresses.index'));
        }

        return view('admincp.core.relation_addresses.edit')->with('relationAddress', $relationAddress);
    }

    /**
     * Update the specified RelationAddress in storage.
     *
     * @param  int              $id
     * @param UpdateRelationAddressRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelationAddressRequest $request)
    {
        $relationAddress = $this->relationAddressRepository->findWithoutFail($id);

        if (empty($relationAddress)) {
            Flash::error('Relation Address not found');

            return redirect(route('admincp.core.relationAddresses.index'));
        }

        $relationAddress = $this->relationAddressRepository->update($request->all(), $id);

        Flash::success('Relation Address updated successfully.');

        return redirect(route('admincp.core.relationAddresses.index'));
    }

    /**
     * Remove the specified RelationAddress from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $relationAddress = $this->relationAddressRepository->findWithoutFail($id);

        if (empty($relationAddress)) {
            Flash::error('Relation Address not found');

            return redirect(route('admincp.core.relationAddresses.index'));
        }

        $this->relationAddressRepository->delete($id);

        Flash::success('Relation Address deleted successfully.');

        return redirect(route('admincp.core.relationAddresses.index'));
    }
}
