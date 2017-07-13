<?php

namespace App\Http\Controllers;
use App\Hoteles;
use Illuminate\Http\Request;


class HotelController extends Controller
{	
 public function hotel()
 {
 $hotel = Hoteles::all('id', 'name', 'telefono', 'direccion');
 return view('hotel')->with('hotel',$hotel);
}

public function show($id) 
{
	$hot = Hoteles::find($id)->first();
	return view('showHotel')->with('hotel',$hot);
	
}	
	
}

