<?php

namespace Modules\Crm\Http\Controllers;

use Modules\Crm\DataTables\VendorDataTable;

use Modules\Crm\Http\Requests\CreateVendorRequest;
use Modules\Crm\Http\Requests\UpdateVendorRequest;
use Modules\Crm\Repositories\VendorRepository;
use Flash;
use Modules\Core\Http\Controllers\Controller as CoreController;
use Response;

class VendorController extends CoreController
{
    /** @var  VendorRepository */
    private $vendorRepository;

    public function __construct(VendorRepository $vendorRepo)
    {
        $this->vendorRepository = $vendorRepo;
    }

    /**
     * Display a listing of the Vendor.
     *
     * @param VendorDataTable $vendorDataTable
     * @return Response
     */
    public function index(VendorDataTable $vendorDataTable)
    {
        return $vendorDataTable->render('admincp.core.vendors.index');
    }

    /**
     * Show the form for creating a new Vendor.
     *
     * @return Response
     */
    public function create()
    {
        return view('admincp.core.vendors.create');
    }

    /**
     * Store a newly created Vendor in storage.
     *
     * @param CreateVendorRequest $request
     *
     * @return Response
     */
    public function store(CreateVendorRequest $request)
    {
        $input = $request->all();

        $vendor = $this->vendorRepository->create($input);

        Flash::success('Vendor saved successfully.');

        return redirect(route('admincp.core.vendors.index'));
    }

    /**
     * Display the specified Vendor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        if (empty($vendor)) {
            Flash::error('Vendor not found');

            return redirect(route('admincp.core.vendors.index'));
        }

        return view('admincp.core.vendors.show')->with('vendor', $vendor);
    }

    /**
     * Show the form for editing the specified Vendor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        if (empty($vendor)) {
            Flash::error('Vendor not found');

            return redirect(route('admincp.core.vendors.index'));
        }

        return view('admincp.core.vendors.edit')->with('vendor', $vendor);
    }

    /**
     * Update the specified Vendor in storage.
     *
     * @param  int              $id
     * @param UpdateVendorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVendorRequest $request)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        if (empty($vendor)) {
            Flash::error('Vendor not found');

            return redirect(route('admincp.core.vendors.index'));
        }

        $vendor = $this->vendorRepository->update($request->all(), $id);

        Flash::success('Vendor updated successfully.');

        return redirect(route('admincp.core.vendors.index'));
    }

    /**
     * Remove the specified Vendor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        if (empty($vendor)) {
            Flash::error('Vendor not found');

            return redirect(route('admincp.core.vendors.index'));
        }

        $this->vendorRepository->delete($id);

        Flash::success('Vendor deleted successfully.');

        return redirect(route('admincp.core.vendors.index'));
    }
}
