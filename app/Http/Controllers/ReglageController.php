<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReglageRequest;
use App\Http\Requests\UpdateReglageRequest;
use App\Repositories\ReglageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ReglageController extends AppBaseController
{
    /** @var  ReglageRepository */
    private $reglageRepository;

    public function __construct(ReglageRepository $reglageRepo)
    {
        $this->reglageRepository = $reglageRepo;
    }

    /**
     * Display a listing of the Reglage.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->reglageRepository->pushCriteria(new RequestCriteria($request));
        $reglages = $this->reglageRepository->all();

        return view('reglages.index')
            ->with('reglages', $reglages);
    }

    /**
     * Show the form for creating a new Reglage.
     *
     * @return Response
     */
    public function create()
    {
        return view('reglages.create');
    }

    /**
     * Store a newly created Reglage in storage.
     *
     * @param CreateReglageRequest $request
     *
     * @return Response
     */
    public function store(CreateReglageRequest $request)
    {
        $input = $request->all();

        $reglage = $this->reglageRepository->create($input);

        Flash::success('Reglage saved successfully.');

        return redirect(route('reglages.index'));
    }

    /**
     * Display the specified Reglage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reglage = $this->reglageRepository->findWithoutFail($id);

        if (empty($reglage)) {
            Flash::error('Reglage not found');

            return redirect(route('reglages.index'));
        }

        return view('reglages.show')->with('reglage', $reglage);
    }

    /**
     * Show the form for editing the specified Reglage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reglage = $this->reglageRepository->findWithoutFail($id);

        if (empty($reglage)) {
            Flash::error('Reglage not found');

            return redirect(route('reglages.index'));
        }

        return view('reglages.edit')->with('reglage', $reglage);
    }

    /**
     * Update the specified Reglage in storage.
     *
     * @param  int              $id
     * @param UpdateReglageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReglageRequest $request)
    {
        $reglage = $this->reglageRepository->findWithoutFail($id);

        if (empty($reglage)) {
            Flash::error('Reglage not found');

            return redirect(route('reglages.index'));
        }

        $reglage = $this->reglageRepository->update($request->all(), $id);

        Flash::success('Reglage updated successfully.');

        return redirect(route('reglages.index'));
    }

    /**
     * Remove the specified Reglage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reglage = $this->reglageRepository->findWithoutFail($id);

        if (empty($reglage)) {
            Flash::error('Reglage not found');

            return redirect(route('reglages.index'));
        }

        $this->reglageRepository->delete($id);

        Flash::success('Reglage deleted successfully.');

        return redirect(route('reglages.index'));
    }
}
