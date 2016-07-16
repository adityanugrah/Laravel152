@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/categories">Category</a></li>
        <li class="active">Tambah Category</li>
    </ol>

    <h1>Add New Category</h1>

    <form method="POST" action="/categories" class="form-horizontal" enctype="multipart/form-data">
    	{{ csrf_field() }}
        @include('categories._form')
    </form>
@endsection