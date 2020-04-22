@extends('layouts.company.admin')

@section('title')
Partner Victory
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
    	<a class="btn btn-success" href="/partner/add"><i class="fa fa-plus"></i> Add Partner</a>
    </div>

    @foreach($partner as $partner)
    <br>
	<div class="media list-group-item list-group-item-action container">
	  <table >
	  	<tbody>
	  	  <tr>
	        <td>
	        	<img width="200px" height="100px" src="{{asset('assets/uploads/partner/'.$partner->image)}}"></td>
	        <td  class="align-top" colspan="3">
	        	<div class="container ">
	        		<p>
	        		Nama Partner : {{$partner->title}}
	        		</p>
	        		<p>
	        		Manager : {{$partner->manager}}
	        		</p><p>
	        		{{$partner->description}}
	        		</p>
	        	</div>
	    	</td>
	      </tr>
	    </tbody>
	  </table>  
		<div style="text-align: right;">
			<a href="{{$partner->link}}" class="btn btn-danger" ><strong>Go To Link</strong> </a>
		</div>
	</div>
		@endforeach	
@stop