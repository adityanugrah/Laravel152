@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/products">Produk</a></li>
        <li class="active">Ubah Product</li>
    </ol>

    <h1>Produk ID: {{ $products->ProductID }}</h1>

    <form method="POST" action="/products/{{ $products->ProductID }}" class="form-horizontal">
        {{ method_field('PATCH') }} {{ csrf_field() }}

        @include('produk._form')
    </form>
@endsection