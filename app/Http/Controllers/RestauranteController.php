<?php

namespace App\Http\Controllers;
use App\Restaurantes;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{   
public function restaurante()
    {
$restaurante = Restaurantes::all();
return view('restaurante')->with('restaurante',$restaurante);
    }
	
	public function show($id) 
{
	$res = Restaurantes::find($id)->first();
	return view('showRestaurante')->with('restaurante',$res);
	
}
}

