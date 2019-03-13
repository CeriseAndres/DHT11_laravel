@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
    	<div class="col-md-8">
    		<div class="card">
       			<div class="card-header">Object Connecté DHT11</div>
				<div class="card-body">
                 	<div class="row justify-content-around">
                 	
                 		<div class="col-md-6">
                    		<div class="card mb-6">
                				<div class="card-header">
                			
                					@foreach ($measures as $measure) 
                                    
                                    
                                        <p>le {{ $measure->date }}</p>
                                        <br>
                                        <p>il faisait {{ $measure->temperature }} C°</p>
                                        <br>
                                        <p>et {{ $measure->humidite }} d'humidité</p>
                                        
                                    @endforeach  
                				
                				</div>
                		</div>
                 	</div>
               		
               	</div>
  			   	
    		</div>
    	</div>
    	<!-- Card -->
        <div class="card weather-card">
        
            <!-- Card content -->
			<div class="card-header pb-3">
        		<h2 class="card-title font-weight-bold">API Meteo (prevision-meteo.ch)</h2>
                <!-- Title -->
                <h4 class="card-title font-weight-bold">{{ $getWeather->city_info->name}}</h4>
                <!-- Text -->
                <p class="card-text">{{ $getWeather->fcst_day_0->day_long}}, {{ $getWeather->current_condition->hour}}, {{ $getWeather->current_condition->condition}}</p>           
                <div class="d-flex justify-content-between">
                  <p class="display-1 degree">{{ $getWeather->current_condition->tmp }}°</p>
                  <img src="{{$getWeather->current_condition->icon_big}}" alt="prevision-meteo.ch">
                  <i class="fas fa-sun-o fa-5x pt-3 amber-text"></i>
                </div>
                <div class="d-flex justify-content-between mb-4">
                  <p>{{ $getWeather->current_condition->humidity}}% d'humidité</p>
                  <p>{{ $getWeather->current_condition->wnd_spd}} hm/h vent</p>
                </div>
                
			</div>
			<div class="card-group" style="text-align: center">
				
    				<div class="card day1">
    					<h4 class="card-title font-weight-bold">{{ $getWeather->fcst_day_1->day_short}}</h4>
    					<img class="card-img-top" src="{{ $getWeather->fcst_day_1->icon}}" alt="Card image cap" style="width: 25%; display: block; margin: 0 auto ">
    					<p>{{ $getWeather->fcst_day_1->tmin}}° / {{ $getWeather->fcst_day_1->tmax}}°</p>
    				
      				</div>
                    <div class=" card day2">
                    <h4 class="card-title font-weight-bold">{{ $getWeather->fcst_day_2->day_short}}</h4>
                    	<img class="card-img-top" src="{{ $getWeather->fcst_day_2->icon}}" alt="Card image cap" style="width: 25%">
                       <p>{{ $getWeather->fcst_day_2->tmin}}° / {{ $getWeather->fcst_day_2->tmax}}°</p>
                    </div>
                    <div class=" card day3">
                    <h4 class="card-title font-weight-bold">{{ $getWeather->fcst_day_3->day_short}}</h4>
                    <img class="card-img-top" src="{{ $getWeather->fcst_day_3->icon}}" alt="Card image cap" style="width: 25%">
                      <p>{{ $getWeather->fcst_day_3->tmin}}° / {{ $getWeather->fcst_day_3->tmax}}°</p>
                    </div>
                    <div class="card day4">
                    <h4 class="card-title font-weight-bold">{{ $getWeather->fcst_day_4->day_short}}</h4>
                    <img class="card-img-top" src="{{ $getWeather->fcst_day_4->icon}}" alt="Card image cap" style="width: 25%">
                      <p>{{ $getWeather->fcst_day_4->tmin}}° / {{ $getWeather->fcst_day_4->tmax}}°</p>
                    </div>
  				</div>
        
		</div>
        <!-- Card -->	
    </div>
</div>
@endsection