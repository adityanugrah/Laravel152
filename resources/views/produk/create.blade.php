@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/products">Produk</a></li>
        <li class="active">Tambah Produk</li>
    </ol>

    <h1>Add New Product</h1>

    <form method="POST" action="/products" class="form-horizontal">
    	{{ csrf_field() }}
        @include('produk._form')
    </form>
@endsection