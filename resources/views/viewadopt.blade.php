@extends('layouts.template')

@section('content')

<!-- viewblog section -->
@php($v=\App\Cat::find(\Auth::user()->id))
<section id="viewadopt" class="section viewadopt">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3" class= "caption1"> 
		<img src="{{asset($v->image)}}" class="img-responsive" alt="no picture" /></div>
		<div class="col-sm-9" class="caption2">
			<h2> {{$v->name}} </h2>
			<h3> {{$v->gender}} </h3>
			<h3> {{$v->age}} y.o </h3></br>
			<ul class="actions">
				<li><a href="tc" class="button">Adopt Me!</a></li>
			</ul>
		</div>

        </div>
	
    </div>
</section>

		<div class="caption3">
			<table>
				<col width="25%">
				<col width="75%">
				<tr>
					<th>ORIGIN SHELTER:</th>
					<th>{{$v->originshelter}}</th>
				</tr>
				<tr>
					<th>VACCINATED:</th>
					<th>{{$v->vaccinated}}</th>
				</tr>
				<tr>
					<th>NEUTERED/SPAYED:</th>
					<th>{{$v->spayed}}</th>
				</tr>
				<tr>
					<td colspan="2"><strong>MEDICAL NOTE & CONSIDERATION</strong></br>
					{{$v->health}}
					</td>
				</tr>
				<tr>
					<td colspan="2"><strong>STORY</strong></br>
					{{$v->story}}
					</td>
				</tr>
			</table>
			
		</div>


@endsection