<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatetypeOperationAPIRequest;
use App\Http\Requests\API\UpdatetypeOperationAPIRequest;
use App\Models\typeOperation;
use App\Repositories\typeOperationRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class typeOperationController
 * @package App\Http\Controllers\API
 */

class typeOperationAPIController extends AppBaseController
{
    /** @var  typeOperationRepository */
    private $typeOperationRepository;

    public function __construct(typeOperationRepository $typeOperationRepo)
    {
        $this->typeOperationRepository = $typeOperationRepo;
    }

    /**
     * Display a listing of the typeOperation.
     * GET|HEAD /typeOperations
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $typeOperations = $this->typeOperationRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($typeOperations->toArray(), 'Type Operations retrieved successfully');
    }

    /**
     * Store a newly created typeOperation in storage.
     * POST /typeOperations
     *
     * @param CreatetypeOperationAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatetypeOperationAPIRequest $request)
    {
        $input = $request->all();

        $typeOperation = $this->typeOperationRepository->create($input);

        return $this->sendResponse($typeOperation->toArray(), 'Type Operation saved successfully');
    }

    /**
     * Display the specified typeOperation.
     * GET|HEAD /typeOperations/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var typeOperation $typeOperation */
        $typeOperation = $this->typeOperationRepository->find($id);

        if (empty($typeOperation)) {
            return $this->sendError('Type Operation not found');
        }

        return $this->sendResponse($typeOperation->toArray(), 'Type Operation retrieved successfully');
    }

    /**
     * Update the specified typeOperation in storage.
     * PUT/PATCH /typeOperations/{id}
     *
     * @param int $id
     * @param UpdatetypeOperationAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetypeOperationAPIRequest $request)
    {
        $input = $request->all();

        /** @var typeOperation $typeOperation */
        $typeOperation = $this->typeOperationRepository->find($id);

        if (empty($typeOperation)) {
            return $this->sendError('Type Operation not found');
        }

        $typeOperation = $this->typeOperationRepository->update($input, $id);

        return $this->sendResponse($typeOperation->toArray(), 'typeOperation updated successfully');
    }

    /**
     * Remove the specified typeOperation from storage.
     * DELETE /typeOperations/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var typeOperation $typeOperation */
        $typeOperation = $this->typeOperationRepository->find($id);

        if (empty($typeOperation)) {
            return $this->sendError('Type Operation not found');
        }

        $typeOperation->delete();

        return $this->sendSuccess('Type Operation deleted successfully');
    }
}
