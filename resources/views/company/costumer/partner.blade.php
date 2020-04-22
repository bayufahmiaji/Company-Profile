@extends('layouts.company.app')

@section('title')
    Partner
@stop

@section('content')
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
			<a href="{{$partner->link}}" target="_blank" class="btn btn-danger" ><strong>Go To Link</strong> </a>
		</div>
	</div>
		@endforeach	
@endsection