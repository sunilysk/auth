@extends('partials/main')

@section('content')

<ul class="nav nav-pills pull-left">
  <li role="presentation"><a href="#">
  <span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span>
  	Auth</a></li>
</ul>
	
	@if(\Auth::other()->check())
<ul class="nav nav-pills pull-right">
  <li role="presentation" class="active"><a href="#"> 
  <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
   {{\Auth::other()->get()->name}}</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="/other/logout">Logout</a></li>
</ul>
	@else
	<div class="container text-center">
	<h1>Unauthorized Access@@@@!!!!!</h1>	
	</div>
	@endif



	<br><br><br><br>
	
	<h2>Hey Others this is your Dashboard</h2>


@endsection