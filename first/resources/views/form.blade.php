@extends('layouts.main')

@push('title')
<title>User Form</title>
@endpush

@section('main-section')

	<h2>HTML Forms</h2>
	
	<form action="{{url('/')}}/register" method="post" enctype="multipart/form-data">
		@csrf
	  <label for="fname">First name:</label><br>
	  <input type="text" id="fname" name="fname" value="{{old('fname')}}">
	  <br>
	  <span style="color:red;"> @error('fname') {{$message}} @enderror </span>
	  <br>
	  <label for="lname">Last name:</label><br>
	  <input type="text" id="lname" name="lname" value="{{old('lname')}}">
	  <br>
	  <span style="color:red;"> @error('lname') {{$message}} @enderror </span>
	  <br>
	  <label for="email">Email:</label><br>
	  <input type="email" id="email" name="email" value="{{old('email')}}">
	  <br>
	  <span style="color:red;"> @error('email') {{$message}} @enderror </span>

	  <br>
	  <label for="password">Password:</label><br>
	  <input type="password" id="password" name="password" value="">
	  <br>
	  <span style="color:red;"> @error('password') {{$message}} @enderror </span>

	  <br>
	  <label for="password_confirmation">Confirm Password:</label><br>
	  <input type="password" id="password_confirmation" name="password_confirmation" value="">
	  <br>
	  <span style="color:red;"> @error('password') {{$message}} @enderror </span>
	  
	  <br><br>
	  <input type="submit" value="Submit">
	</form> 

@endsection


