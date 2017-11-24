@extends('layouts.template')

@section('content')
<!-- Header Section --> 

<!-- contact section -->
<section id="report" class="section report">
	<div class="content">
		<h2> Report a case </h2>
		</br>
		<p> Please read our <a href="rescue">rescue policy</a> first before you send the form. </p>
		<p><strong>Note:</strong> This report a case form is for Yogyakarta and nearby only. If this is a rescue case, please help us to provide a temporary home for the rescued animals, in case we don't have enough space </p>
		
		<form class="form" method="post" action="{{url('postreport')}}" enctype="multipart/form-data">
			{{csrf_field()}}
		<p type="Name:"><input name="name" placeholder="Write your name here.."></input></p>
		<p type="Phone:"><input name="phone" placeholder="Write your phone number here.."></input></p>
		<p type="Address:"><input name="address" placeholder="Let us know your address.."></input></p>
		<p type="Email:"><input name="email" placeholder="Let us know how to contact you back.."></input></p>
		<p type="Subject:"><input name="subject" placeholder="Write your subject here.."></input></p>
		<p type="Message:"><input name="message" placeholder="Tell us about the animal's condition.."></input></p>
		<p type="Location:"><input name="location" placeholder="Where's the animal's location.."></input></p>
		<p type="upload image:"><input type="file" name="image" accept="image/*"></input></p>
		
		<div style="text-align:center;"><button type="submit">Send Report</button></div>
		</form>
	</div>
</section>




@endsection