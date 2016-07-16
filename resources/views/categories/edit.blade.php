@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/categories">Category</a></li>
        <li class="active">Ubah Category</li>
    </ol>

    <h1>Category ID: {{ $categories->CategoryID }}</h1>

    <form method="POST" action="/categories/{{ $categories->CategoryID }}" class="form-horizontal" enctype="multipart/form-data">
        {{ method_field('PATCH') }}

        @include('categories._form')
    </form>
@endsection