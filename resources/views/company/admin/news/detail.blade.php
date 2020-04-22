@extends('layouts.company.admin')

@section('title')
Berita Victory
@stop

@section('content')
	<header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-sm-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-users"></i>
                        Victory International Futures
                    </h4>
                </div>
                
            </div>
        </div>
    </header>
    
      
     <br>
	<div class="paragraphs container">  
		<img class="img-polaroid" src="{{asset('assets/uploads/news/'.$news->image)}}" style="width:250px; height: 200px; float:left; margin-right:10px;"/>  
	<div class="row">  
		<div class="span12 well">  
			<div class="content-heading">
				<h3>{{$news->title}}</h3>
			</div>
			<br>  
			<p><a href="#" class="btn btn-dark">Diposkan pada {{$news->created_at}}</a> </p>  
		</div>  
		<p style="text-align:justify;">{{$news->description}}</p>  
		<div style="clear:both;"></div>  
		</div>  

	</div>
@stop