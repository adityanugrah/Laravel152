@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/suppliers">Supplier</a></li>
        <li class="active">Ubah Supplier</li>
    </ol>

    <h1>Supplier ID: {{ $suppliers->SupplierID }}</h1>

    <form method="POST" action="/suppliers/{{ $suppliers->SupplierID }}" class="form-horizontal">
        {{ method_field('PATCH') }} {{ csrf_field() }}

        @include('suppliers._form')
    </form>
@endsection