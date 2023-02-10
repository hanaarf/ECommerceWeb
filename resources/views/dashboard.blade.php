@extends('main')

@section('content')

<div class="card">
	<div class="card-header">Dashboard</div>
	<div class="card-body">
		
		You are Login in Laravel 9 Custom Login Registration Application. as  {{ Auth::user()->name }}
		<p>
			email : {{ Auth::user()->email }}
		</p>

		<label for="">nama : </label>
		<input type="text" value="{{ Auth::user()->name }}">

		<br><br>
		<label for="">email : </label>
		<input type="text" value="{{ Auth::user()->email }}">
	
	</div>
</div>

@endsection('content')