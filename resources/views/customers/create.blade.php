@extends('master')

@section('konten_utama')
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li><a href="/customers">Customers</a></li>
		<li class="active">Add New</li>
	</ol>
	
	<h1>Add New Category</h1>
	
	<form method="POST" action="/customers" class="form-horizontal">
		{{ csrf_field() }}
		@include('customers._form')
	</form>
@endsection