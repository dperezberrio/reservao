<?php
namespace App\Http\Controllers;
use App\Moteles;
use Illuminate\Http\Request;

class MotelAdminController extends Controller
{
    public function MotelAdmin()
    {
$motel = Moteles::all();
return view('motel')->with('motel',$motel);
    }
	
	public function show($id) 
{
	$mot = Moteles::find($id)->first();
	return view('showMotel')->with('motel',$mot);
	
}
}

