@extends('layouts.main')

@push('title')
<title>User Form - Component</title>
@endpush

@section('main-section')

	<h2>User List</h2>
	<!-- {{print_r($users)}} -->
	<table style="text-align: center">
		<tr>
			<th>Sr</th>
			<th>Name</th>
			<th>Email</th>
			<th>City</th>
			<th>State</th>
			<th>Action</th>
		</tr>
		<?php $sr=1; ?>
		@foreach($users as $user)
		<tr>
			<td>{{$sr++}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->city}}</td>
			<td>{{$user->state}}</td>
			<!-- <td> <a href="{{url('user-delete')}}/{{$user->id}}">Delete</a> </td> -->
			<td> <a href="{{route('user.delete', ['id'=>$user->id])}}">Trash</a> </td>
			<td> <a href="{{route('user.edit', ['id'=>$user->id])}}">Edit</a> </td>
		</tr>
		@endforeach
	</table>
	<div>
		{{$users->links()}}
	</div>
	

@endsection


