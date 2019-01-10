<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Agency;
use App\Models\Booking;
use App\Models\User;
use App\Repositories\CarRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use DB;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Brand;


class CarController extends AppBaseController
{
    /** @var  CarRepository */
    private $carRepository;

    public function __construct(CarRepository $carRepo)
    {
        $this->carRepository = $carRepo;
    }

    /**
     * Display a listing of the Car.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->carRepository->pushCriteria(new RequestCriteria($request));
        $cars = $this->carRepository->all();

        return view('cars.index')
            ->with('cars', $cars);
    }

    /**
     * Show the form for creating a new Car.
     *
     * @return Response
     */
    public function create()
    {
        $brands = Brand::pluck('name','id');
        $agencies = Agency::pluck('name','id');
        $users = User::pluck('name','id');
        return view('cars.create',compact(['brands','agencies','users']));
    }

    /**
     * Store a newly created Car in storage.
     *
     * @param CreateCarRequest $request
     *
     * @return Response
     */
    public function store(CreateCarRequest $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        if($request->hasfile('image')){

            $car = $request->except('image');
            $photoName = time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('storage'), $photoName);
            $request->merge( array( 'image' => $photoName ) );
            $car = array_merge($car , array('image'=> $photoName));
        }
     
        
        $car = $this->carRepository->create($car);

        Flash::success('Car saved successfully.');

        return redirect(route('cars.index'));
    }

    /**
     * Display the specified Car.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $car = $this->carRepository->findWithoutFail($id);
        //$booking_history = Booking::where('car_id', '=' ,$id)->get();
        $booking_history = DB::table('bookings')
            ->join('clients', 'bookings.client_id', '=', 'clients.id')
            ->join('cars','bookings.car_id', '=', 'cars.id')
            ->select('bookings.*','clients.firstName as firstname', 'clients.lastName as lastname')
            ->where('bookings.car_id', '=', $id)
            ->get();
            //dd($booking_history);
        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        return view('cars.show',compact('car','booking_history'));
    }

    /**
     * Show the form for editing the specified Car.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $brands = Brand::pluck('name','id');
        $agencies = Agency::pluck('name','id');
        $users = User::pluck('name','id');
        $car = $this->carRepository->findWithoutFail($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        return view('cars.edit',compact(['brands','agencies','users']))->with('car', $car);
    }

    /**
     * Update the specified Car in storage.
     *
     * @param  int              $id
     * @param UpdateCarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCarRequest $request)
    {
        $car = $this->carRepository->findWithoutFail($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        $car = $this->carRepository->update($request->all(), $id);
        Flash::success('Car updated successfully.');

        return redirect(route('cars.index'));
    }

    /**
     * Remove the specified Car from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $car = $this->carRepository->findWithoutFail($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        $this->carRepository->delete($id);

        Flash::success('Car deleted successfully.');

        return redirect(route('cars.index'));
    }

    public function carPrices(Request $req){
        $car = $this->carRepository->findWithoutFail($id);
        return response()->json($car);

    }

}
