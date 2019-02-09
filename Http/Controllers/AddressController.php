<?php

namespace Modules\Crm\Http\Controllers;
use Modules\Crm\DataTables\Core\AddressDataTable;
use Modules\Crm\Http\Requests\Core\CreateAddressRequest;
use Modules\Crm\Http\Requests\Core\UpdateAddressRequest;
use Modules\Crm\Repositories\AddressRepository;
use Flash;
use Modules\Core\Http\Controllers\Controller as CoreController;



use Response;

class AddressController extends CoreController
{
    /** @var  AddressRepository */
    private $addressRepository;

    public function __construct(AddressRepository $addressRepo)
    {
        $this->addressRepository = $addressRepo;
    }

    /**
     * Display a listing of the Address.
     *
     * @param AddressDataTable $addressDataTable
     * @return Response
     */
    public function index(AddressDataTable $addressDataTable)
    {
        return $addressDataTable->render('admincp.core.addresses.index');
    }

    /**
     * Show the form for creating a new Address.
     *
     * @return Response
     */
    public function create()
    {
        return view('admincp.core.addresses.create');
    }

    /**
     * Store a newly created Address in storage.
     *
     * @param CreateAddressRequest $request
     *
     * @return Response
     */
    public function store(CreateAddressRequest $request)
    {
        $input = $request->all();

        $address = $this->addressRepository->create($input);

        Flash::success('Address saved successfully.');

        return redirect(route('admincp.core.addresses.index'));
    }

    /**
     * Display the specified Address.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $address = $this->addressRepository->findWithoutFail($id);

        if (empty($address)) {
            Flash::error('Address not found');

            return redirect(route('admincp.core.addresses.index'));
        }

        return view('admincp.core.addresses.show')->with('address', $address);
    }

    /**
     * Show the form for editing the specified Address.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $address = $this->addressRepository->findWithoutFail($id);

        if (empty($address)) {
            Flash::error('Address not found');

            return redirect(route('admincp.core.addresses.index'));
        }

        return view('admincp.core.addresses.edit')->with('address', $address);
    }

    /**
     * Update the specified Address in storage.
     *
     * @param  int              $id
     * @param UpdateAddressRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAddressRequest $request)
    {
        $address = $this->addressRepository->findWithoutFail($id);

        if (empty($address)) {
            Flash::error('Address not found');

            return redirect(route('admincp.core.addresses.index'));
        }

        $address = $this->addressRepository->update($request->all(), $id);

        Flash::success('Address updated successfully.');

        return redirect(route('admincp.core.addresses.index'));
    }

    /**
     * Remove the specified Address from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $address = $this->addressRepository->findWithoutFail($id);

        if (empty($address)) {
            Flash::error('Address not found');

            return redirect(route('admincp.core.addresses.index'));
        }

        $this->addressRepository->delete($id);

        Flash::success('Address deleted successfully.');

        return redirect(route('admincp.core.addresses.index'));
    }
}
