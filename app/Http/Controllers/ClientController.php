<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Repositories\ClientRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Client;
use DB;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;

class ClientController extends AppBaseController
{
    /** @var  ClientRepository */
    private $clientRepository;

    public function __construct(ClientRepository $clientRepo)
    {
        $this->clientRepository = $clientRepo;
    }

    /**
     * Display a listing of the Client.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        
        $this->clientRepository->pushCriteria(new RequestCriteria($request));
       if(Auth::user()->role_id == 1)
       {        
            $clients = $this->clientRepository->all();
        }
        else {
            //$clients = $this->clientRepository->all();
            $clients = Client::where('user_id', '=' ,Auth::user()->id)->get();
            
        }
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new Client.
     *
     * @return Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created Client in storage.
     *
     * @param CreateClientRequest $request
     *
     * @return Response
     */
    public function store(CreateClientRequest $request)
    {
        if (Auth::check()) {
            $input = $request->all();
            
            $input = array_merge($input , array('user_id'=> Auth::id()));
            $client = $this->clientRepository->create($input);

            Flash::success('Client saved successfully.');

            return redirect(route('clients.index'));
        }
        else {
            return $request->expectsJson()
                ? response()->json(['message' => $exception->getMessage()], 401)
                : redirect()->guest(route('login'));
        }
    }

    /**
     * Display the specified Client.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
         $client_reservation = DB::table('bookings')
            ->join('clients', 'clients.id', '=', 'bookings.client_id')
            ->join('cars','cars.id', '=', 'bookings.car_id')
            ->select('cars.name','bookings.*','clients.firstName as firstname', 'clients.lastName as lastname')
            ->where('clients.id', '=', $id)
            ->get();

            
        $client = $this->clientRepository->findWithoutFail($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('clients.index'));
        }

        return view('clients.show',compact(['client','client_reservation']));
    }

    /**
     * Show the form for editing the specified Client.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        $client = $this->clientRepository->findWithoutFail($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('clients.index'));
        }

        return view('clients.edit')->with('client', $client);
    }

    /**
     * Update the specified Client in storage.
     *
     * @param  int              $id
     * @param UpdateClientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClientRequest $request)
    {
        $client = $this->clientRepository->findWithoutFail($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('clients.index'));
        }

        $client = $this->clientRepository->update($request->all(), $id);

        Flash::success('Client updated successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Remove the specified Client from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $client = $this->clientRepository->findWithoutFail($id);

        if (empty($client)) {
            Flash::error('Client not found');

            return redirect(route('clients.index'));
        }

        $this->clientRepository->delete($id);

        Flash::success('Client deleted successfully.');

        return redirect(route('clients.index'));
    }

    /**
     * Store a newly created Client in storage.
     *
     * @param CreateClientRequest $request
     *
     * @return Response
     */
    public function addClient(CreateClientRequest $request)
    {
        $input = $request->all();

        $client = $this->clientRepository->create($input);

        Flash::success('Client saved successfully.');

        return redirect(route('bookings.create'));
    }
}
