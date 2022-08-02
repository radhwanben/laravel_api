<?php

namespace App\Http\Controllers\Api;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookingStoreRequest;
use App\Http\Requests\BookingStoreService;
use App\Http\Requests\BookingAvailableService;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Booking::all();
    }
    
    /**
     * store
     *
     * @param  mixed $request
     * @param  mixed $service
     * @param  mixed $avaible
     * @return void
     */
    public function store(BookingStoreRequest $request ,BookingStoreService $service ,BookingAvailableService $avaible)
    {
        if(!$avaible->CheckProductCapacity($request->product_id)){
            $bookings= $service->StoreBooking(
                $request->booked_on,
                $request->client_id,
                $request->product_id,
                $request->status="Available"
            );
            
            $avaible->ProductCapacityUpdate($request->product_id);

            return response()->json([
                'status' => 'Available',
                'message' => "booking Created successfully!",
                'bookings' => $bookings
            ], 201);
        }else{
            $bookings= $service->StoreBooking(
                $request->booked_on,
                $request->client_id,
                $request->product_id,
                $request->status="Unavailable"
            );

            return response()->json([
                'status' => 'Unavailable',
                'message' => "booking can't be Created product stock unaviable!"
            ], 409);
        }
        
    }

  
}
