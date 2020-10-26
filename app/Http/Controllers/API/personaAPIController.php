<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatepersonaAPIRequest;
use App\Http\Requests\API\UpdatepersonaAPIRequest;
use App\Models\persona;
use App\Repositories\personaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class personaController
 * @package App\Http\Controllers\API
 */

class personaAPIController extends AppBaseController
{
    /** @var  personaRepository */
    private $personaRepository;

    public function __construct(personaRepository $personaRepo)
    {
        $this->personaRepository = $personaRepo;
    }

    /**
     * Display a listing of the persona.
     * GET|HEAD /personas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $personas = $this->personaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($personas->toArray(), 'Personas retrieved successfully');
    }

    /**
     * Store a newly created persona in storage.
     * POST /personas
     *
     * @param CreatepersonaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatepersonaAPIRequest $request)
    {
        $input = $request->all();

        $persona = $this->personaRepository->create($input);

        return $this->sendResponse($persona->toArray(), 'Persona saved successfully');
    }

    /**
     * Display the specified persona.
     * GET|HEAD /personas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var persona $persona */
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            return $this->sendError('Persona not found');
        }

        return $this->sendResponse($persona->toArray(), 'Persona retrieved successfully');
    }

    /**
     * Update the specified persona in storage.
     * PUT/PATCH /personas/{id}
     *
     * @param int $id
     * @param UpdatepersonaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepersonaAPIRequest $request)
    {
        $input = $request->all();

        /** @var persona $persona */
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            return $this->sendError('Persona not found');
        }

        $persona = $this->personaRepository->update($input, $id);

        return $this->sendResponse($persona->toArray(), 'persona updated successfully');
    }

    /**
     * Remove the specified persona from storage.
     * DELETE /personas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var persona $persona */
        $persona = $this->personaRepository->find($id);

        if (empty($persona)) {
            return $this->sendError('Persona not found');
        }

        $persona->delete();

        return $this->sendSuccess('Persona deleted successfully');
    }
}
