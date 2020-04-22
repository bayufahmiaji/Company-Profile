@extends('layouts.company.app')
     
@section('title')
Berita
@stop

@section('content')      
     <br>
    <div class="card container">
		<div class="card-body">
			
	<div class="paragraphs container">  
		<br>
		<img class="img-polaroid" src="{{asset('assets/uploads/analyst/'.$analysis->image)}}" style="width:250px; height: 200px; float:left; margin-right:10px;"/>  
	<div class="row">  
		<div class="span12 well">  
			<div class="content-heading">
				<h3>{{$analysis->title}}</h3>
			</div>
			<br>  
			<p><a href="#" class="btn btn-dark">Diposkan pada {{$analysis->created_at}}</a> </p>  
		</div>  
		<p style="text-align:justify;">{{$analysis->description}}</p>  
		<div style="clear:both;"></div>  
		</div>  

	</div>
		</div>    	
    </div> 
@stop