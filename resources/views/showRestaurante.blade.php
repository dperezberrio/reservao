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
							 <td><strong>NOMBRE</strong></td>
				             <td><strong>TELEFONO</strong></td>
				             <td><strong>DIRRECION</strong></td>
				             <td><strong>MESA</strong></td>
				              </tr>							 
							
							 <tr>
							 <td>{{$restaurante->name}}</td>
							 <td>{{$restaurante->telefono}}</td>
							 <td>{{$restaurante->direccion}}</td>
							 <td>{{$restaurante->mesa}}</td>
							 </tr>						 
											                    
							</table>					    
						    <p>
						<a href="{{ url('/restaurante') }}"><button class="btn btn-primary btn-lg">ATRAS</button></a>
						<a href="{{ url('/home') }}"><button class="btn btn-primary btn-lg">MENU</button></a>
                    </div>
								
								
                   </div>
               </div>
             </div>
        </div>
    </div>
</div>

@endsection
                           