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
							 <td><strong>ACCION</strong></td>
				             </tr>							 
							 @foreach($hotel as $item)
							 <tr>


							<td><img src="{{asset($item->foto)}}"width="150" height="150" ></td>

							 <td><a href="/hotel/{{$item->id}}/mostrar">VER</a></td>
					
							 
							 </tr>						 
							 @endforeach()						                    
							</table>					    
						    <p>
						
						<a href="{{ url('/home') }}"><button class="btn btn-primary btn-lg">ATRAS</button></a>


                    </div>
								
								
                   </div>
               </div>
             </div>
        </div>
    </div>
</div>

@endsection
                           