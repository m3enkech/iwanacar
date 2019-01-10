<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Repositories\ClientRepository;
use App\Http\Requests\CreateBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Repositories\BookingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Client;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Agency;
use Carbon\Carbon;
use Flash;
use DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class BookingController extends AppBaseController
{
    /** @var  BookingRepository */
    private $bookingRepository;

    public function __construct(BookingRepository $bookingRepo)
    {
        $this->bookingRepository = $bookingRepo;
    }

    /**
     * Display a listing of the Booking.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $client_count = DB::table('clients')
            ->join('bookings', 'clients.id', '=', 'bookings.client_id')
            ->select('bookings.client_id','clients.firstName as fname', 'clients.lastName as lname', DB::raw("count(bookings.id) as count"))
            ->groupBy('bookings.client_id')
            ->get();
        $this->bookingRepository->pushCriteria(new RequestCriteria($request));
        $bookings = $this->bookingRepository->all();

        return view('bookings.index',compact(['bookings','client_count']));
    }


    /**
     * Display a listing of the Booking.
     *
     * @param Request $request
     * @return Response
     */
    public function bookingHistory(Request $request)
    {

        $this->bookingRepository->pushCriteria(new RequestCriteria($request));
        $bookings = $this->bookingRepository->paginate(10);

        return view('bookings.history',compact(['bookings']));
    }



    /**
     * Show the form for creating a new Booking.
     *
     * @return Response
     */
    public function create()
    {
        $brands = Brand::pluck('name','id');
        $agencies = Agency::pluck('name','id');
        $users = User::pluck('name','id');
        $cars = Car::pluck('name','id');
        $car_prices = DB::table('cars')->select('id','name','price_unit','price_long_term','price_unit_agencies')->get();
//dd($car_prices);
        $clients = Client::select(DB::raw("CONCAT (firstName,' ',lastName) AS name"),'id')->pluck('name','id');
        return view('bookings.create',compact(['brands','agencies','users','clients','cars','car_prices']));
    }

    /**
     * Store a newly created Booking in storage.
     *
     * @param CreateBookingRequest $request
     *
     * @return Response
     */
    public function store(CreateBookingRequest $request)
    {
        $car = DB::table('cars')
                ->select('mileage')
                ->where('id' ,'=', $request->car_id)
                ->first();

        $input = $request->all();
        $datetime1 = new Carbon($request->end_date);
        $datetime2 = new Carbon($request->start_date);
        $interval= $datetime1->diffInDays($datetime2);
        $input = array_merge($input , array('nombre_jours'=> $interval,'mileage_before'=>$car->mileage));
        //dd($input);
        $booking = $this->bookingRepository->create($input);

        Flash::success('Booking saved successfully.');

        return redirect(route('bookings.index'));
    }

    /**
     * Display the specified Booking.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $booking = $this->bookingRepository->findWithoutFail($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        return view('bookings.show')->with('booking', $booking);
    }

    /**
     * Show the form for editing the specified Booking.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $brands = Brand::pluck('name','id');
        $agencies = Agency::pluck('name','id');
        $clients = Client::select(DB::raw("CONCAT (firstName,' ',lastName) AS name"),'id')->pluck('name','id');
        $cars = Car::pluck('name','id');
        $booking = $this->bookingRepository->findWithoutFail($id);
        $car_prices = DB::table('cars')->select('id','name','price_unit','price_long_term','price_unit_agencies')->get();

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        return view('bookings.edit',compact(['brands','agencies','clients','cars','car_prices','booking']));
    }

    /**
     * Update the specified Booking in storage.
     *
     * @param  int              $id
     * @param UpdateBookingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookingRequest $request)
    {
        $booking = $this->bookingRepository->findWithoutFail($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        $booking = $this->bookingRepository->update($request->all(), $id);

        Flash::success('Booking updated successfully.');

        return redirect(route('bookings.index'));
    }

    /**
     * Remove the specified Booking from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $booking = $this->bookingRepository->findWithoutFail($id);

        if (empty($booking)) {
            Flash::error('Booking not found');

            return redirect(route('bookings.index'));
        }

        $this->bookingRepository->delete($id);

        Flash::success('Booking deleted successfully.');

        return redirect(route('bookings.index'));
    }



    
}
