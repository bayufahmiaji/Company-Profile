@extends('layouts.company.app')

@section('title')
    Analisa
@stop

@section('content')
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
			<a href="/analisa/{{$analyst->id}}/detail" class="btn btn-danger" ><strong>Read More</strong> </a>
		</div>
	</div>
		@endforeach	
@endsection