<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatetramiteRequest;
use App\Http\Requests\UpdatetramiteRequest;
use App\Repositories\tramiteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tramiteController extends AppBaseController
{
    /** @var  tramiteRepository */
    private $tramiteRepository;

    public function __construct(tramiteRepository $tramiteRepo)
    {
        $this->tramiteRepository = $tramiteRepo;
    }

    /**
     * Display a listing of the tramite.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tramites = $this->tramiteRepository->all();

        return view('tramites.index')
            ->with('tramites', $tramites);
    }

    /**
     * Show the form for creating a new tramite.
     *
     * @return Response
     */
    public function create()
    {
        return view('tramites.create');
    }

    /**
     * Store a newly created tramite in storage.
     *
     * @param CreatetramiteRequest $request
     *
     * @return Response
     */
    public function store(CreatetramiteRequest $request)
    {
        $input = $request->all();

        $tramite = $this->tramiteRepository->create($input);

        Flash::success('Tramite saved successfully.');

        return redirect(route('tramites.index'));
    }

    /**
     * Display the specified tramite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tramite = $this->tramiteRepository->find($id);

        if (empty($tramite)) {
            Flash::error('Tramite not found');

            return redirect(route('tramites.index'));
        }

        return view('tramites.show')->with('tramite', $tramite);
    }

    /**
     * Show the form for editing the specified tramite.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tramite = $this->tramiteRepository->find($id);

        if (empty($tramite)) {
            Flash::error('Tramite not found');

            return redirect(route('tramites.index'));
        }

        return view('tramites.edit')->with('tramite', $tramite);
    }

    /**
     * Update the specified tramite in storage.
     *
     * @param int $id
     * @param UpdatetramiteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatetramiteRequest $request)
    {
        $tramite = $this->tramiteRepository->find($id);

        if (empty($tramite)) {
            Flash::error('Tramite not found');

            return redirect(route('tramites.index'));
        }

        $tramite = $this->tramiteRepository->update($request->all(), $id);

        Flash::success('Tramite updated successfully.');

        return redirect(route('tramites.index'));
    }

    /**
     * Remove the specified tramite from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tramite = $this->tramiteRepository->find($id);

        if (empty($tramite)) {
            Flash::error('Tramite not found');

            return redirect(route('tramites.index'));
        }

        $this->tramiteRepository->delete($id);

        Flash::success('Tramite deleted successfully.');

        return redirect(route('tramites.index'));
    }
}
