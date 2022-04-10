@extends('layouts.main')

@push('title')
<title>{{$title}}, User Form - Component</title>
@endpush

@section('main-section')

	<h2> {{$title}}, HTML Forms with Component</h2>
	
	<form action="{{$url}}" method="post" enctype="multipart/form-data">
		@csrf

		<x-input lable="First Name" type="text" name="name" edit="{{$user ? $user->name : ''}}" />
		<br>
		<x-input lable="Email" type="email" name="email" edit="{{$user ? $user->email : ''}}"  />
		<br>
		<x-input lable="City" type="text" name="city"  edit="{{$user ? $user->city : ''}}"/>
		<br>
		<x-input lable="State" type="text" name="state"  edit="{{$user ? $user->state : ''}}"/>
		<br>
		<x-input lable="Password" type="password" name="password" />
		<br>
		<x-input lable="Confirm Password" type="password" name="password_confirmation" />
		<br>
	  
	  	<br><br>
	  	<input type="submit" value="Submit">
	</form> 

@endsection


