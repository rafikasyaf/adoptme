@extends('layouts.template')

@section('content')
<!-- Header Section --> 

<!-- profil2 section -->
<section id="profil2" class="section profil2">
  <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
    <h2> DONATION HISTORY </h2>
        <tr>     
            <th>No</th>
            <th>Amount</th>
            <th>Status</th> 
        </tr>
    </thead>

    <tbody>
        @foreach($data as $v)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->amount}}</td>
            <td>{{$value->status}}</td>
		</tr>
        @endforeach  
    </tbody>      
    </table>
	<ul>
		<li><center><a href="profil" class="button">back</a></center></li>
	</ul>
    </div>
</div>

</section>






@endsection