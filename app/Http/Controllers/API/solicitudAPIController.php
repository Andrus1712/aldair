<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatesolicitudAPIRequest;
use App\Http\Requests\API\UpdatesolicitudAPIRequest;
use App\Models\solicitud;
use App\Repositories\solicitudRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class solicitudController
 * @package App\Http\Controllers\API
 */

class solicitudAPIController extends AppBaseController
{
    /** @var  solicitudRepository */
    private $solicitudRepository;

    public function __construct(solicitudRepository $solicitudRepo)
    {
        $this->solicitudRepository = $solicitudRepo;
    }

    /**
     * Display a listing of the solicitud.
     * GET|HEAD /solicituds
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $solicituds = $this->solicitudRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($solicituds->toArray(), 'Solicituds retrieved successfully');
    }

    /**
     * Store a newly created solicitud in storage.
     * POST /solicituds
     *
     * @param CreatesolicitudAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatesolicitudAPIRequest $request)
    {
        $input = $request->all();

        $solicitud = $this->solicitudRepository->create($input);

        return $this->sendResponse($solicitud->toArray(), 'Solicitud saved successfully');
    }

    /**
     * Display the specified solicitud.
     * GET|HEAD /solicituds/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var solicitud $solicitud */
        $solicitud = $this->solicitudRepository->find($id);

        if (empty($solicitud)) {
            return $this->sendError('Solicitud not found');
        }

        return $this->sendResponse($solicitud->toArray(), 'Solicitud retrieved successfully');
    }

    /**
     * Update the specified solicitud in storage.
     * PUT/PATCH /solicituds/{id}
     *
     * @param int $id
     * @param UpdatesolicitudAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesolicitudAPIRequest $request)
    {
        $input = $request->all();

        /** @var solicitud $solicitud */
        $solicitud = $this->solicitudRepository->find($id);

        if (empty($solicitud)) {
            return $this->sendError('Solicitud not found');
        }

        $solicitud = $this->solicitudRepository->update($input, $id);

        return $this->sendResponse($solicitud->toArray(), 'solicitud updated successfully');
    }

    /**
     * Remove the specified solicitud from storage.
     * DELETE /solicituds/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var solicitud $solicitud */
        $solicitud = $this->solicitudRepository->find($id);

        if (empty($solicitud)) {
            return $this->sendError('Solicitud not found');
        }

        $solicitud->delete();

        return $this->sendSuccess('Solicitud deleted successfully');
    }
}
