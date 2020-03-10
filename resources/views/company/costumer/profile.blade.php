@extends('layouts.company.app')
<head>
	
	   <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/index.css')}}">
</head>
@section('title')
    Profile
@stop

@section('content')
	
	<div class="card-body">      
             
                <center><img src="{{asset('assets/img/logo.jpg')}}" class="img-center " style="align:center; height:120px; width:500px;" alt="Photo of sunset"></center>
            </div>

     <div class=" card bg-dark">
	    <div class="card-body">
	  	<center>
	    <h1 style="color:white"><br>Sejarah</h1>
		    <h4><p  style="color:white">
		    	Berdiri pada tahun 2003, Institusi yang di akui oleh pemerintah Indonesia sebagai brokerage company di pasar keuangan dunia, yang berbasis tekhnologi informasi mutakhir untuk menunjang bisnisnya.
			    </p>
			    <p style="color:white">
			    	Merupakan perusahaan pialang berjangka terbesar dan terpercaya di Indonesia, dengan skala Internasional.

			    </p>
			    <p style="color:white">
			    	PT. Victory International Futures melayani beberapa produk perdagangan berjangka, antara lain : Currency (mata uang), Stock Indeks (Indeks Saham) dan Commodity (komoditas), terutama Emas.
			    </p>
			    <p style="color:white">
			    	Anggota Bursa Berjangka di Indonesia, yaitu : Bursa Komoditi & Derivatif Indonesia (BKDI) dan Lembaga Kliring Identrust clearing House (ICH)

			    </p>
			</h4>
		</center>
	  </div>
	</div>
	    <div class="card-body">
	  	<center>
	    <h1 class="text-warning"><br>VISI</h1>
		    <h4><p>
		    	Lebih baik, Lebih pintar dan lebih cepat dalam solusi trading global
			    </p>
			</h4>
		</center>
	  </div>
	</div>
	

	 	
	<div class="card-body bg-warning">
	  	<center>
	    <h1 style="color:white"><br>MISI</h1>
		    <h4><p style="color:white">
		    	Kami berkomitmen untuk meletakkan dasar yang tepat untuk para investor mencapai tujuan trading dan menghasilkan sebanyak mungkin dari pasar global
			</h4>
		</center>

	 </div>
	

	
      
@stop

   <script type="text/javascript" src="{{asset('assets/js/pages/index.js')}}"></script>