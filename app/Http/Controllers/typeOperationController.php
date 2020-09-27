<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetypeOperationRequest;
use App\Http\Requests\UpdatetypeOperationRequest;
use App\Repositories\typeOperationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class typeOperationController extends AppBaseController
{
    /** @var  typeOperationRepository */
    private $typeOperationRepository;

    public function __construct(typeOperationRepository $typeOperationRepo)
    {
        $this->typeOperationRepository = $typeOperationRepo;
    }

    /**
     * Display a listing of the typeOperation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $typeOperations = $this->typeOperationRepository->all();

        return view('type_operations.index')
            ->with('typeOperations', $typeOperations);
    }

    /**
     * Show the form for creating a new typeOperation.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_operations.create');
    }

    /**
     * Store a newly created typeOperation in storage.
     *
     * @param CreatetypeOperationRequest $request
     *
     * @return Response
     */
    public function store(CreatetypeOperationRequest $request)
    {
        $input = $request->all();

        $typeOperation = $this->typeOperationRepository->create($input);

        Flash::success('Type Operation saved successfully.');

        return redirect(route('typeOperations.index'));
    }

    /**
     * Display the specified typeOperation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeOperation = $this->typeOperationRepository->find($id);

        if (empty($typeOperation)) {
            Flash::error('Type Operation not found');

            return redirect(route('typeOperations.index'));
        }

        return view('type_operations.show')->with('typeOperation', $typeOperation);
    }

    /**
     * Show the form for editing the specified typeOperation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeOperation = $this->typeOperationRepository->find($id);

        if (empty($typeOperation)) {
            Flash::error('Type Operation not found');

            return redirect(route('typeOperations.index'));
        }
        return view('type_operations.edit')->with('typeOperation', $typeOperation);
    }

    /**
     * Update the specified typeOperation in storage.
     *
     * @param int $id
     * @param UpdatetypeOperationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetypeOperationRequest $request)
    {
        $typeOperation = $this->typeOperationRepository->find($id);

        if (empty($typeOperation)) {
            Flash::error('Type Operation not found');

            return redirect(route('typeOperations.index'));
        }

        $typeOperation = $this->typeOperationRepository->update($request->all(), $id);

        Flash::success('Type Operation updated successfully.');

        return redirect(route('typeOperations.index'));
    }

    /**
     * Remove the specified typeOperation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeOperation = $this->typeOperationRepository->find($id);

        if (empty($typeOperation)) {
            Flash::error('Type Operation not found');

            return redirect(route('typeOperations.index'));
        }

        $this->typeOperationRepository->delete($id);

        Flash::success('Type Operation deleted successfully.');

        return redirect(route('typeOperations.index'));
    }
}
