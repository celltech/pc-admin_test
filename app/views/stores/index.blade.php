@extends('layouts.master')

@section('title')
Store List
@stop

@section('content')
<body>
	<h1>Store List</h1>
	<div>
		@if($message = Session::get('added'))
		<div class="alert alert-info">
			{{ $message }}  <b>Thank you.<b>
		</div><br>
		@endif
	<div>
	{{ link_to_route('stores.create', 'Add store', '', ['class' => 'btn btn-primary']) }} 
	</div><br>
<table class="table table-striped">
	<tr>
		<th>Store #</th>
		<th>Store Name</th>
		<th>Telephone</th>
		<th></th>
		<th></th>
	</tr>
@foreach ($stores as $store)	
	<tr>
		<td>{{ $store->store_num }}</td>
		<td>{{ $store->store_name }}</td>
		<td>{{ $store->store_tel }}</td>
		<td><a href="stores/<?php echo $store->id ?>/edit" class="btn btn-primary btn-sm" role="button">&nbsp;Edit&nbsp;</a></td>
		<td>
			{{ Form::open(['method' => 'delete', 'route' => ['stores.destroy', $store->id]]) }}
			{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
			{{ Form::close() }}
		</td>
	</tr>
@endforeach
</table>
@stop