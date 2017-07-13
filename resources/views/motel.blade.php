@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-14 col-md-offset-0">
            <div class="Panel with panel-primary class">
                <div class="panel-heading">
				<font size=100><b><center>MOTELES</b></font>
				</div>

                <div class="panel-body">
                    <div class="form-group">
					<center><table class="table">							
							 <tr>
							 <td>NOMBRE</td>
							 <td>ACCION</td>
				            						 
							 @foreach($motel as $item)
							 <tr>
							 <td>{{$item->name}}</td>
							 
							 <td><a href="/motel/{{$item->id}}/mostrar">VER</a></td>
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
