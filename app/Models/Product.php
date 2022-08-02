<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;


    protected $fillable =[
        
        'title',
        'type',
        'description',
        'capacity',
        
    ];


    public function Booking()
    {
       return $this->hasMany(Booking::class);
    }




}
