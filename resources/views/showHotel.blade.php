@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="Panel with panel-primary class">
                <div class="panel-heading">
				<font size=100><b><center>HOTELES</b></font>
				</div>

                <div class="panel-body">
                    <div class="form-group">
					<center><table class="table">
							 <tr>
							 <td><h1><strong>NOMBRE</strong></h1></td>
				             <td><h1><strong>TELEFONO</strong></h1></td>
				             <td><h1><strong>DIRRECION</strong></h1></td>
				             <td><h1><strong>HABITACION</strong></h1></td>
				              </tr>							 
							
							 <tr>
							 <td><h1>{{$hotel->name}}</h1></td>
							 <td><h1>{{$hotel->telefono}}</h1></td>
							 <td><h1>{{$hotel->direccion}}</h1></td>
							 <td><h1>{{$hotel->habitacion}}</h1></td>
							 </tr>						 
											                    
							</table>					    
						    <p>
						<a href="{{ url('/hotel') }}"><button class="btn btn-primary btn-lg">ATRAS</button></a>
						<a href="{{ url('/home') }}"><button class="btn btn-primary btn-lg">MENU</button></a>
                    </div>
								
								
                   </div>
               </div>
             </div>
        </div>
    </div>
</div>

@endsection
                           