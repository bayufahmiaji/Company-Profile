@extends('layouts.company.app')

@section('title')
    Edukasi Web
@stop

@section('content')
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
@endsection