@extends('layouts.company.admin')

@section('title')
Webinar Victory
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
    	<a class="btn btn-success" href="/webinar/add"><i class="fa fa-plus"></i> Add Webinar</a>
    </div>

    @foreach($binar as $binar)
	<br>
	<div class="media list-group-item list-group-item-action container">
	  <table >
	  	<tbody>
	  	  <tr>
	  	  	<td>
	  	  		<h3 style="text-align: left;"><span style="color: #ff6600;">{{$binar->title}}</span></h3>
	  	  	</td>
	  	  </tr>
	  	  <tr>
	  	  	<td><span class="btn btn-dark">Diposkan pada : {{$binar->created_at}}</span>
	  	  	</td>
	  	  </tr>
	  	  <tr>
	  	  	<td colspan="2">
	  	  		<hr>
	  	  	</td>
	  	  </tr>
	      <tr>
	        <td>
	        	<video width="400px" height="300px" controls>
	        		<source src="{{asset('assets/uploads/webinar/'.$binar->image)}}">
	        	</video></td>
	        <td  class="align-top" colspan="3">
	        	<div class="container ">
	        		
	           {{$binar->description}}
	        	</div>
	    	</td>
	      </tr>
	    </tbody>
	  </table>  
		<div style="text-align: right;">
			<a href="" class="btn btn-danger" ><strong>Details</strong> </a>
		</div>
	</div>
	@endforeach
@stop