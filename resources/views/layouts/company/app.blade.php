<!doctype html>
<html class="no-js">
<head>
    <style type="text/css">
        .footer {
  
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: black;
          color: white;
          text-align: center;
        }
        .navbar {
  min-height: 100px;
}

    </style>
    <meta charset="UTF-8">
    <title>@section('title')
    @show</title>
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/img/logo1.ico')}}"/>
    <!-- Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
    
    <!-- End of Global styles -->
</head>
<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('assets/img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
      <nav class="navbar navbar-expand-lg sticky-top" style="background-color: black;">
      <div class="container">
      <a class="navbar-brand" href="/">
                    <img src="{{asset('assets/img/vif_logo.png')}}" width="250" height="40" alt="logo">
                </a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div classclass="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <b>
       <ul class="nav nav-pills">
        <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('profile') ? "active" : '' }}" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('berita') ? "active" : '' }}" href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('tutor') ? "active" : '' }}" href="/tutor">Webinar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('analisa') ? "active" : '' }}" href="/analisa">Analisa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('partner') ? "active" : '' }}" href="/partner">Partner Trainer</a>
        </li>

        <li class="nav-pills">
          <a  href="" style="width:100px" class="btn btn-success">LOGIN</a>
        </li>
      </ul>
      </b>
     
      </div>
    </div>

    </nav>
      
    
     <div id="content" class="bg-container">
            <!-- Content -->
            @yield('content')
            <!-- Content end -->
        </div>
    <!--wrapper-->
    
    <!-- # right side -->
</div>

<!--Global scripts-->
<script type="text/javascript" src="{{asset('assets/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!--End of global scripts-->
</body>
<!-- Footer -->
<footer class="footer font-small blue pt-4 fixed bottom">
  <div class="container">
  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase text-white">Legalitas</h5>
        <p>Bappebti: 558/BAPPEBTI/SI/XII/2004</p>
        <p>ICDX: 041/SPKB/ICDX/Dir/IX/2010</p>
        <p>ICH: 044/SPKK/ISI-VIF/VI/2012</p>
      </div>

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase text-white">Hubungi Kami</h5>

        <ul class="list-unstyled">
          <li>
            <p>Here you can use rows and columns to organize your footer content.</p>
          </li>
          <li>
           Alamat 
           <p>Jl. Trembesi No.825, RT.2/RW.5, Pademangan Tim., Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14410, Indonesia</p>
          </li>
          <li>
            Email
            <p>vifxpro@vifx.co</p>
          </li>
          <li>
            Phone/Whatsapp
            <p>0878-7139-8111
              <br>0878-8989-3863</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <center>
        <h5 class="text-uppercase text-white">Join Us</h5>
        </center>

        <ul class="list-unstyled ">
          <li>
            <center>
            <a href="#!" class="text-white">  <img src="/assets/img/wa.png" width="35" height="35"></a>
            </center>
          </li>
          <li>
            <br>
            <center>
            <a href="#!" class="text-white"><img src="/assets/img/fb.png" width="50" height="35"></a>
            </center>
          </li>
          <li>
            <br>
            <center>
            <a href="#!" class="text-white"><img src="/assets/img/ig.png" width="35" height="35"></a>
            </center>
          </li>
          <li>
            <br>
            <center>
            <a href="#!" class="text-white"><img src="/assets/img/email.png" width="35" height="35"></a>
            </center>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <p align="left">
    
  Forex Trading adalah transaksi perdagangan mata uang dari negara yang berbeda terhadap satu sama lain. Mata uang dipertukarkan untuk melakukan bisnis dan perdagangan luar negeri, yang membuat pasar forex menjadi pasar keuangan terbesar di dunia. Forex trading dilakukan melalui broker forex atau market maker dan sekarang dianggap sebagai bentuk umum dari investasi. Pasar Forex adalah pasar global 24 jam, yang memungkinkan para broker forex melakukan perdagangan mulai saat pasar dibuka di Australia pada hari Minggu dan berakhir di New York pada hari Jumat. Pedagang hari ini juga memiliki fleksibilitas untuk melakukan trading Forex secara online. Beberapa manfaat dari perdagangan forex adalah likuiditas yang tinggi dan biaya transaksi yang rendah. Suatu broker Forex, seperti Victory, juga memungkinkan para pedagang untuk berdagang pasar menggunakan leverage. Dengan kata lain, pedagang dapat berdagang dengan jumlah uang yang lebih banyak daripada jumlah uang yang ada dalam rekening mereka. Namun, leverage dapat memperbesar keuntungan dan sekaligus memperbesar kerugian pula.
  </p>
  <p align="left">
    
  DISCLAIMER Disclaimer: Seluruh konten di dalam website ini bersifat informatif. PT. Victory International Futures tidak menjamin kelengkapan dan akurasinya. PT. Victory International Futures tidak bertanggung jawab atas segala bentuk kerugian, baik langsung maupun tidak langsung, akibat penggunaan informasi yang tersedia di website ini.
  </p>

  <p align="left">
    
  Kebijakan Privasi: PT. Victory International Futures membutuhkan informasi pribadi bagi pihak yang melakukan pendaftaran demo dan live account untuk kepentingan internal. PT. Victory International Futures dan karyawannya berkewajiban menjaga kerahasiaan informasi tersebut dan tidak akan memberikannya kepada pihak ketiga. Namun jika diwajibkan oleh undang-undang, PT. Victory International Futures dapat memberikan informasi tersebut ke otoritas publik.
  <!-- Footer Links -->
  </p>

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">2020 Copyright:
    <a href="https://github.com/bayufahmiaji" class="text-white">Bayu Fahmiaji Fadillah</a>
  </div>
</div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</html>