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
    	<a class="btn btn-success" href=""><i class="fa fa-plus"></i> Add News</a>
    </div>
    <br>

	<div class="media list-group-item list-group-item-action container">
	  <table >
	  	<tbody>
	  	  <tr>
	  	  	<td>
	  	  		<h3 style="text-align: left;"><span style="color: #ff6600;">VIFX Pro™ Bandung</span></h3>
	  	  	</td>
	  	  </tr>
	  	  <tr>
	  	  	<td><span> ini hari sama yang upload</span>
	  	  	</td>
	  	  </tr>
	  	  <tr>
	  	  	<td colspan="2">
	  	  		<hr>
	  	  	</td>
	  	  </tr>
	      <tr>
	        <td>
	        	<img width="400px" height="300px" src="{{asset('assets/img/moto.png')}}"></td>
	        <td  class="align-top" colspan="3">
	        	<div class="container ">
	        		
	           Jakarta, 11 Maret 2020 – 17:03 WIB – Victory International Futures – vifxpro.com Pada pasar perdagangan hari Rabu (11/3), saham Eropa menguat pertama kalinya dalam lima sesi, karena Inggris menjadi negara terbaru untuk memotong suku bunga dalam upaya untuk menahan kerusakan ekonomi dari epidemi virus corona. Pada pukul 16:44 WIB Saham Pan-Eropa STOXX 600 menguat
	        	</div>
	    	</td>
	      </tr>
	    </tbody>
	  </table>  
		<div style="text-align: right;">
			<a href="" class="btn btn-danger" ><strong>Read More</strong> </a>
		</div>
@stop