<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesolicitudRequest;
use App\Http\Requests\UpdatesolicitudRequest;
use App\Repositories\solicitudRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class solicitudController extends AppBaseController
{
    /** @var  solicitudRepository */
    private $solicitudRepository;

    public function __construct(solicitudRepository $solicitudRepo)
    {
        $this->solicitudRepository = $solicitudRepo;
    }

    /**
     * Display a listing of the solicitud.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $solicituds = $this->solicitudRepository->all();

        return view('solicituds.index')
            ->with('solicituds', $solicituds);
    }

    /**
     * Show the form for creating a new solicitud.
     *
     * @return Response
     */
    public function create()
    {
        return view('solicituds.create');
    }

    /**
     * Store a newly created solicitud in storage.
     *
     * @param CreatesolicitudRequest $request
     *
     * @return Response
     */
    public function store(CreatesolicitudRequest $request)
    {
        $input = $request->all();

        $solicitud = $this->solicitudRepository->create($input);

        Flash::success('Solicitud saved successfully.');

        return redirect(route('solicituds.index'));
    }

    /**
     * Display the specified solicitud.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $solicitud = $this->solicitudRepository->find($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        return view('solicituds.show')->with('solicitud', $solicitud);
    }

    /**
     * Show the form for editing the specified solicitud.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $solicitud = $this->solicitudRepository->find($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        return view('solicituds.edit')->with('solicitud', $solicitud);
    }

    /**
     * Update the specified solicitud in storage.
     *
     * @param int $id
     * @param UpdatesolicitudRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatesolicitudRequest $request)
    {
        $solicitud = $this->solicitudRepository->find($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        $solicitud = $this->solicitudRepository->update($request->all(), $id);

        Flash::success('Solicitud updated successfully.');

        return redirect(route('solicituds.index'));
    }

    /**
     * Remove the specified solicitud from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $solicitud = $this->solicitudRepository->find($id);

        if (empty($solicitud)) {
            Flash::error('Solicitud not found');

            return redirect(route('solicituds.index'));
        }

        $this->solicitudRepository->delete($id);

        Flash::success('Solicitud deleted successfully.');

        return redirect(route('solicituds.index'));
    }
}
