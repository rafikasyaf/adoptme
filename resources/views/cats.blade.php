@extends('layouts.template')

@section('content')
<!-- catslogo Section --> 
<div id="catslogo">
<center><img class="catslogo" src="adoptme/images/portfolio/cats.jpg" class="img-responsive" alt="logo kucing" /></center>
<h2>MEOW</h2>
</div>

<!-- cats section -->
<section id="cats" class="section cats">
  <div class="container-fluid">
  	@foreach($data as $v)
    <div class="row">
      <div class="col-sm-4 cats-item">
        <div class="cats-content">
		<center><img class="catsrow" src="adoptme/images/portfolio/kucing1.jpg" alt="kucing1" /></center>
		<center>
		<h3> {{$v->name}} </h3> </center>
		<h4>{{$v->gender}} - {{$v->age}} y.o </h4>
		<ul class="actions">
			<li><center><a href="viewadopt" class="button">Adopt Me!</a></center></li>
		</ul>
		</div>
	</div>
		@endforeach
	</div>

@endsection