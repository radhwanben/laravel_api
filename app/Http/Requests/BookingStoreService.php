<?php

namespace App\Http\Requests;

use App\Models\Booking;

class BookingStoreService {

    
    /**
     * StoreBooking
     *
     * @param  mixed $book_on
     * @param  mixed $client_id
     * @param  mixed $product_id
     * @return void
     */


    public function StoreBooking($book_on,$client_id,$product_id,$status)
    {
        $booking = Booking::create([
            'booked_on' => $book_on,
            'client_id' => $client_id,
            'product_id' => $product_id,
            'status' =>$status,
        ]);

        
        return  $booking;
    }




}
