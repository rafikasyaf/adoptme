@extends('layouts.template')

@section('content')
<!-- Header Section --> 

<!-- profil2 section -->
<section id="profil2" class="section profil2">
  <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <h2> ADOPTION HISTORY </h2>

    @php($value=\App\Cat::find(\Auth::user()->id))
	<center><img class="img-box" src="{{asset($value->image)}}" height="100px" alt="Image not found"></center>
        <tr>
            
            <th>Name: </th>
            <th>{{$value->name}}</th>
            
        </tr>
    </thead>
            <tr>
               
                <td>Sex:</td>
                <td>{{$value->gender}}</td>
			</tr>
            <tr>
                
                <td>Age:</td>
                <td>{{$value->age}} y.o</td>
                </tr>
            <tr>
                
                <td>Progress:</td>
                <td> </td>
                </tr>
    </table>
	<ul>
		<li><center><a href="profil" class="button">back</a></center></li>
	</ul>
    </div>
</div>

</section>






@endsection