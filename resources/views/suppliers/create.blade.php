@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/suppliers">Supplier</a></li>
        <li class="active">Tambah Supplier</li>
    </ol>

    <h1>Add New Supplier</h1>

    <form method="POST" action="/suppliers" class="form-horizontal">
   	 {{ csrf_field() }}
        @include('suppliers._form')
    </form>
@endsection