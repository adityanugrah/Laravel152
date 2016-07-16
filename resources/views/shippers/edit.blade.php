@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/shippers">Shipper</a></li>
        <li class="active">Ubah Shipper</li>
    </ol>

    <h1>Shipper ID: {{ $shippers->ShipperID }}</h1>

    <form method="POST" action="/shippers/{{ $shippers->ShipperID }}" class="form-horizontal">
        {{ method_field('PATCH') }}{{ csrf_field() }}
{{ csrf_field() }}

        @include('shippers._form')
    </form>
@endsection