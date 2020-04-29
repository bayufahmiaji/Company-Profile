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
    <div class="container">
    	<a class="btn btn-success" href="/news/add"><i class="fa fa-plus"></i> Add News</a>
    </div>
    @foreach($news as $news)
    <br>
	<div class="media list-group-item list-group-item-action container">
	  <table >
	  	<tbody>
	  	  <tr>
	  	  	<td>
	  	  		<h3 style="text-align: left;"><span style="color: #ff6600;">{{$news->title}}</span></h3>
	  	  	</td>
	  	  </tr>
	  	  <tr>
	  	  	<td><span> {{$news->post_by}}</span>
	  	  	</td>
	  	  </tr>
	  	  <tr>
	  	  	<td colspan="2">
	  	  		<hr>
	  	  	</td>
	  	  </tr>
	      <tr>
	        <td>
	        	<img width="400px" height="300px" src="{{asset('assets/uploads/news/'.$news->image)}}"></td>
	        <td  class="align-top" colspan="3">
	        	<div class="container ">
	        		<p>
	        		<?=substr($news->description,0,500);?>
	        		</p>
	        	</div>
	    	</td>
	      </tr>
	    </tbody>
	  </table>  
		<div style="text-align: right;">
			<a href="/news/{{$news->id}}/detail" class="btn btn-danger" ><strong>Read More</strong> </a>
			<a href="/news/{{$news->id}}/edit" class="btn btn-danger" ><strong>Edit</strong> </a>
			<a href="/news/{{$news->id}}/delete" class="btn btn-danger" ><strong>Delete</strong> </a>
		</div>
	</div>
		@endforeach
@stop