@extends('layouts.company.admin')

@section('title')
Analisis Victory
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
    <div class="container">
    	<a class="btn btn-success" href="/analyst/add"><i class="fa fa-plus"></i> Add Analysis</a>
    </div>

    @foreach($analyst as $analyst)
    <br>
	<div class="media list-group-item list-group-item-action container">
	  <table >
	  	<tbody>
	  	  <tr>
	  	  	<td>
	  	  		<h3 style="text-align: left;"><span style="color: #ff6600;">{{$analyst->title}}</span></h3>
	  	  	</td>
	  	  </tr>
	  	  <tr>
	  	  	<td><span class="btn btn-dark">Diposkan pada : {{$analyst->created_at}}</span>
	  	  	</td>
	  	  </tr>
	  	  <tr>
	  	  	<td colspan="2">
	  	  		<hr>
	  	  	</td>
	  	  </tr>
	      <tr>
	        <td>
	        	<img width="400px" height="300px" src="{{asset('assets/uploads/analyst/'.$analyst->image)}}"></td>
	        <td  class="align-top" colspan="3">
	        	<div class="container ">
	        		<p>
	        		<?=substr($analyst->description,0,500);?>
	        		</p>
	        	</div>
	    	</td>
	      </tr>
	    </tbody>
	  </table>  
		<div style="text-align: right;">
			<a href="/analyst/{{$analyst->id}}/detail" class="btn btn-danger" ><strong>Read More</strong> </a>
		</div>
	</div>
		@endforeach	
@stop