<?php

namespace App\Http\Requests;

use App\Models\Product;

class BookingAvailableService{

    
    /**
     * CheckProductCapacity
     *
     * @param  mixed $product_id
     * @return void
     */

    public function CheckProductCapacity($product_id)
    {
        $product =Product::find($product_id);

        if ($product->capacity <=0){
            return true;
        }
    }
    
    /**
     * ProductCapacityUpdate
     *
     * @param  mixed $product_id
     * @return void
     */
    public function ProductCapacityUpdate($product_id)
    {
        $product =Product::find($product_id);

        $newproductcapacity =$product->capacity -1;
        
        return Product::where('id' , $product_id)->update(['capacity' =>$newproductcapacity]);
    }


}
