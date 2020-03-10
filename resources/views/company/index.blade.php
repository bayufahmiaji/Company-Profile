@extends('layouts.company.app')

@section('title')
    Victory International Future
@stop

@section('content')
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/img/logo.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p style="color:black;">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/logo.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/img/logo.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="card-body">      
      <center>
      <h1 style="color:black"><br>LEGALITAS</h1>
      </center>
      <table class="table">
        <tbody>
        <tr>
          <td align="center">558/BAPPEBTI/SI/XII/2004<br><img src="{{asset('assets/img/bappeti.jpg')}}"></td>
        <td align="center">041/SPKB/ICDX/Dir/IX/2010<br><img src="{{asset('assets/img/icdx.png')}}"></td>
        <td align="center">044/SPKK/ISI-VIF/VI/2012<br><img src="{{asset('assets/img/ich.jpg')}}"></td>
      </tr>
       </tbody>
      </table>
      <br>
      <center><h4> PT VICTORY INTERNATIONAL FUTURES</h4></center>
      <center>
      <img src="{{asset('assets/img/vif_logo.png')}}">

      <p class="container"><br><br>Pemberitahuan Resiko
      Perdagangan berjangka dan forex memiliki peluang dan resiko yang tinggi. Apabila Anda hendak berinvestasi dalam perdagangan berjangka dan forex, Anda terlebih dahulu
      harus mengerti dan memahami kegiatan perdagangan berjangka serta isi dari Perjanjian dan Peraturan Transaksi
      </p>
       <p class="container">VIFX Pro™ ( vifxpro.com ) merupakan divisi online dari PT. Victory International Futures ( vifx.co.id ). Pada saat anda membuka account trading real melalui link referensi VIFX Pro™ yang ada di website ini maupun materi promosi dan pemasaran lain maka anda menjadi nasabah resmi dari PT. Victory International Futures.
        </p>
        <p class="container">
        VPT. Victory International Futures merupakan broker forex terpecaya di Indonesia yang memiliki cabang di Jakarta, Malang, Surabaya, Palembang, Jogja, Bali, Solo dan kota-kota besar lainnya.          
        </p> 
      </center>
</div>
@stop
