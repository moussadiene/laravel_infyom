<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatetypeCompteAPIRequest;
use App\Http\Requests\API\UpdatetypeCompteAPIRequest;
use App\Models\typeCompte;
use App\Repositories\typeCompteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class typeCompteController
 * @package App\Http\Controllers\API
 */

class typeCompteAPIController extends AppBaseController
{
    /** @var  typeCompteRepository */
    private $typeCompteRepository;

    public function __construct(typeCompteRepository $typeCompteRepo)
    {
        $this->typeCompteRepository = $typeCompteRepo;
    }

    /**
     * Display a listing of the typeCompte.
     * GET|HEAD /typeComptes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $typeComptes = $this->typeCompteRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($typeComptes->toArray(), 'Type Comptes retrieved successfully');
    }

    /**
     * Store a newly created typeCompte in storage.
     * POST /typeComptes
     *
     * @param CreatetypeCompteAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatetypeCompteAPIRequest $request)
    {
        $input = $request->all();

        $typeCompte = $this->typeCompteRepository->create($input);

        return $this->sendResponse($typeCompte->toArray(), 'Type Compte saved successfully');
    }

    /**
     * Display the specified typeCompte.
     * GET|HEAD /typeComptes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var typeCompte $typeCompte */
        $typeCompte = $this->typeCompteRepository->find($id);

        if (empty($typeCompte)) {
            return $this->sendError('Type Compte not found');
        }

        return $this->sendResponse($typeCompte->toArray(), 'Type Compte retrieved successfully');
    }

    /**
     * Update the specified typeCompte in storage.
     * PUT/PATCH /typeComptes/{id}
     *
     * @param int $id
     * @param UpdatetypeCompteAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetypeCompteAPIRequest $request)
    {
        $input = $request->all();

        /** @var typeCompte $typeCompte */
        $typeCompte = $this->typeCompteRepository->find($id);

        if (empty($typeCompte)) {
            return $this->sendError('Type Compte not found');
        }

        $typeCompte = $this->typeCompteRepository->update($input, $id);

        return $this->sendResponse($typeCompte->toArray(), 'typeCompte updated successfully');
    }

    /**
     * Remove the specified typeCompte from storage.
     * DELETE /typeComptes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var typeCompte $typeCompte */
        $typeCompte = $this->typeCompteRepository->find($id);

        if (empty($typeCompte)) {
            return $this->sendError('Type Compte not found');
        }

        $typeCompte->delete();

        return $this->sendSuccess('Type Compte deleted successfully');
    }
}
