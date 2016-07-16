@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/shippers">Shippers</a></li>
        <li class="active">Tambah Shippers</li>
    </ol>

    <h1>Add New Shippers</h1>

    <form method="POST" action="/shippers" class="form-horizontal">
    {{ csrf_field() }}
        @include('shippers._form')
    </form>
@endsection