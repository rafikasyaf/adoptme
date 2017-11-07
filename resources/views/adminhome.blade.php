<!doctype html>

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Auro - Elegant, Minimal, Creative Bootstrap Template </title>
<link rel="stylesheet" href="{{ asset('adoptme/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('adoptme/css/flexslider.css')}}">
<link rel="stylesheet" href="{{ asset('adoptme/css/main.css')}}">
<link rel="stylesheet" href="{{ asset('adoptme/css/responsive.css')}}">
<link rel="stylesheet" href="{{ asset('adoptme/css/animate.min.css')}}">
<link rel="stylesheet" href="{{ asset('adoptme/https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}">
</head>

<body>

<!-- Header Section -->
<section class="tophead" role="tophead"> 
  <!-- Navigation Section -->
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="#">Auro</a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
          <li><a href="/">Home</a></li>
          <li><a href="adopt">Adopt Me</a></li>
          <li><a href="qna">Q&A</a></li>
          <li><a href="report">Report</a></li>
		  <li><a href="donation">Donation</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </nav>
	  <nav class="nav-login" role="navigation">
		<li><a href="#"  data-target="#login-modal">Log In</a></li>
	  </nav>
     <!-- <a href="#" class="nav-toggle">Menu<span></span></a> </div> --> 
  </header>
  <!-- Navigation Section --> 
</section>
<!-- Header Section --> 
<!-- Slider Section -->
<section id="header-slider" class="section">
  <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active"> <img src="adoptme/images/slider/slid1.jpg" alt="Chania">
        <div class="carousel-caption">
          <h3>We'r Auro</h3>
          <p>We Build Strong Brands which impact your customers</p>
        </div>
      </div>
      <div class="item"> <img src="adoptme/images/slider/slid2.jpg" alt="Chania">
        <div class="carousel-caption">
          <h3>Minimal Agency Template</h3>
          <p>We're Australia based branding & design agency</p>
        </div>
      </div>
    </div>
    <!-- Controls --> 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span></a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span></a></div>
</section>
<!-- Slider Section --> 
<!-- Service Section -->
<section id="services" class="section services">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="services-content">
          <h4>We're Australia based branding & design agency.</h4>
          <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="services-content">
          <h5>Brand Experience</h5>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Mobile Application</a></li>
            <li><a href="#">Product Development</a></li>
            <li><a href="#">Packaging</a></li>
            <li><a href="#">Retail Management</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="services-content">
          <h5>Media Marketing</h5>
          <ul>
            <li><a href="#">Marketing Research</a></li>
            <li><a href="#">Social Marketing</a></li>
            <li><a href="#">Mobile marketing</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Service Section --> 




<!-- footer section --> 

<!-- JS FILES --> 
<script src="{{ asset('adoptme/https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')}}"></script> 
<script src="{{ asset('adoptme/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('adoptme/js/jquery.flexslider-min.js')}}"></script> 
<script src="{{ asset('adoptme/js/retina.min.js')}}"></script> 
<script src="{{ asset('adoptme/js/modernizr.js')}}"></script> 
<script src="{{ asset('adoptme/js/main.js')}}"></script>
</body>
</html>