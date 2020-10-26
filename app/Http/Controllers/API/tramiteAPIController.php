<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatetramiteAPIRequest;
use App\Http\Requests\API\UpdatetramiteAPIRequest;
use App\Models\tramite;
use App\Repositories\tramiteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class tramiteController
 * @package App\Http\Controllers\API
 */

class tramiteAPIController extends AppBaseController
{
    /** @var  tramiteRepository */
    private $tramiteRepository;

    public function __construct(tramiteRepository $tramiteRepo)
    {
        $this->tramiteRepository = $tramiteRepo;
    }

    /**
     * Display a listing of the tramite.
     * GET|HEAD /tramites
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tramites = $this->tramiteRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tramites->toArray(), 'Tramites retrieved successfully');
    }

    /**
     * Store a newly created tramite in storage.
     * POST /tramites
     *
     * @param CreatetramiteAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatetramiteAPIRequest $request)
    {
        $input = $request->all();

        $tramite = $this->tramiteRepository->create($input);

        return $this->sendResponse($tramite->toArray(), 'Tramite saved successfully');
    }

    /**
     * Display the specified tramite.
     * GET|HEAD /tramites/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var tramite $tramite */
        $tramite = $this->tramiteRepository->find($id);

        if (empty($tramite)) {
            return $this->sendError('Tramite not found');
        }

        return $this->sendResponse($tramite->toArray(), 'Tramite retrieved successfully');
    }

    /**
     * Update the specified tramite in storage.
     * PUT/PATCH /tramites/{id}
     *
     * @param int $id
     * @param UpdatetramiteAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetramiteAPIRequest $request)
    {
        $input = $request->all();

        /** @var tramite $tramite */
        $tramite = $this->tramiteRepository->find($id);

        if (empty($tramite)) {
            return $this->sendError('Tramite not found');
        }

        $tramite = $this->tramiteRepository->update($input, $id);

        return $this->sendResponse($tramite->toArray(), 'tramite updated successfully');
    }

    /**
     * Remove the specified tramite from storage.
     * DELETE /tramites/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var tramite $tramite */
        $tramite = $this->tramiteRepository->find($id);

        if (empty($tramite)) {
            return $this->sendError('Tramite not found');
        }

        $tramite->delete();

        return $this->sendSuccess('Tramite deleted successfully');
    }
}
