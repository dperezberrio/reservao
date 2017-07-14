<?php

namespace App\Http\Controllers;
use App\Hoteles;
use Illuminate\Http\Request;


class AdminHotelController extends Controller
{	
 public function adminHotel()
 {
 $adminHotel = Hoteles::all('id', 'name', 'telefono', 'direccion');
 return view('adminHotel')->with('adminHotel',$adminHotel);
}

public function show($id) 
{
	$hot = Hoteles::find($id)->first();
	return view('showHotel')->with('hotel',$hot);
	
}	
	
}
