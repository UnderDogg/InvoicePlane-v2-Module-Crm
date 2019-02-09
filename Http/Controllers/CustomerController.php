<?php

namespace Modules\Crm\Http\Controllers;

use Modules\Crm\DataTables\CustomerDataTable;

use Modules\Crm\Http\Requests\CreateCustomerRequest;
use Modules\Crm\Http\Requests\UpdateCustomerRequest;
use Modules\Crm\Repositories\CustomerRepository;
use Flash;
use Modules\Core\Http\Controllers\Controller as CoreController;
use Response;

class CustomerController extends CoreController
{
    /** @var  CustomerRepository */
    private $customerRepository;

    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepository = $customerRepo;
    }

    /**
     * Display a listing of the Customer.
     *
     * @param CustomerDataTable $customerDataTable
     * @return Response
     */
    public function index(CustomerDataTable $customerDataTable)
    {
        return $customerDataTable->render('admincp.core.customers.index');
    }

    /**
     * Show the form for creating a new Customer.
     *
     * @return Response
     */
    public function create()
    {
        return view('admincp.core.customers.create');
    }

    /**
     * Store a newly created Customer in storage.
     *
     * @param CreateCustomerRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerRequest $request)
    {
        $input = $request->all();

        $customer = $this->customerRepository->create($input);

        Flash::success('Customer saved successfully.');

        return redirect(route('admincp.core.customers.index'));
    }

    /**
     * Display the specified Customer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $customer = $this->customerRepository->findWithoutFail($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('admincp.core.customers.index'));
        }

        return view('admincp.core.customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified Customer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $customer = $this->customerRepository->findWithoutFail($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('admincp.core.customers.index'));
        }

        return view('admincp.core.customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified Customer in storage.
     *
     * @param  int              $id
     * @param UpdateCustomerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomerRequest $request)
    {
        $customer = $this->customerRepository->findWithoutFail($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('admincp.core.customers.index'));
        }

        $customer = $this->customerRepository->update($request->all(), $id);

        Flash::success('Customer updated successfully.');

        return redirect(route('admincp.core.customers.index'));
    }

    /**
     * Remove the specified Customer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $customer = $this->customerRepository->findWithoutFail($id);

        if (empty($customer)) {
            Flash::error('Customer not found');

            return redirect(route('admincp.core.customers.index'));
        }

        $this->customerRepository->delete($id);

        Flash::success('Customer deleted successfully.');

        return redirect(route('admincp.core.customers.index'));
    }
}
