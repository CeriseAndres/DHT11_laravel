@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
    	<div class="col-md-11">
    		<div class="card">
       			<div class="card-header">Object Connecté DHT11</div>
				<div class="card-body">
                 	<div class="row justify-content-around">
                 	
                 		<div class="col-md-3">
                    		<div class="card mb-3">
                				<div class="card-header">
                					<ul>
                                		<li>{{ $getWeather->current_condition->tmp}}</li>
                                		
                                	</ul>	
                				
                				</div>
                				<div class="card-body">
                                	
                				</div>
                			</div>
                		</div>
                 	</div>
               		
               	</div>
  			   	
    		</div>
    	</div>	
    </div>
</div>
@endsection