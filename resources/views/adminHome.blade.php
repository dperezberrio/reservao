@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="Panel with panel-primary class">
                <div class="panel-heading">
				<h1><font size=100><b><center>Categoria De Reservas</b></font></h1>
				</div>

                <div class="panel-body">
                    <div class="form-group">
                   
                  <div class="col-md-14 col-md-offset-0">             
                <tr><td><a href="{{ url('/adminHotel') }}"><img src="{{asset('imagenes/hotel.jpg')}}"width="350" height="350" ></td>
            <td><td><a href="{{ url('/motelAdmin') }}"><img src="{{asset('imagenes/motel.jpg')}}"width="350" height="350"></td>
          <td><td><a href="{{ url('/restauranteAdmin') }}"><img src="{{asset('imagenes/restaurante.jpg')}}"width="350" height="350"></td>
            </tr> 
                    </div>

                    hol mhhdkh
								
								
                   </div>
               </div>
             </div>
        </div>
    </div>
</div>

@endsection
