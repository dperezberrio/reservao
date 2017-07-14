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
							 <td><h1><strong>IMAGEN</strong></h1></td>
							 <td><h1><strong>NOMBRE</strong></h1></td>
							 <td><h1><strong>ACCION</strong></h1></td>
				             </tr>							 
							 @foreach($hotel as $item)
							 <tr>							
							<td><img src="../imagenes/{{ $item->foto }}"width="120" height="120" ></td>
							 <td><h1>{{$item->name}}</h1></td>
							 <td><h1><a href="/hotel/{{$item->id}}/mostrar">VER</a></h1></td>				
							 
							 </tr>						 
							 @endforeach()						                    
							</table>					    
						    <p>
						

						@if(Auth::user()->rol == 1)
						   <button class="btn btn-primary btn-lg">Modificar</button></a>
						<button class="btn btn-primary btn-lg">Agregar</button></a>
						<button class="btn btn-primary btn-lg">Eliminar</button></a>
							<a href="{{ url('/home') }}"><button class="btn btn-primary btn-lg">Atras</button></a>
						@else
							<a href="{{ url('/home') }}"><button class="btn btn-primary btn-lg">Atras</button></a>
						@endif


                    </div>
								
								
                   </div>
               </div>
             </div>
        </div>
    </div>
</div>

@endsection
                           