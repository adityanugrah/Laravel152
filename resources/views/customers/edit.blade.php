@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/customers">Customers</a></li>
        <li class="active">Ubah Customers</li>
    </ol>

    <h1>Customer ID: {{ $customers->CustomerID }}</h1>

    <form method="POST" action="/customers/{{ $customers->CustomerID }}" class="form-horizontal">
         {{ method_field('PATCH') }}{{ csrf_field() }}
{{ csrf_field() }}

        @include('customers._form1')
    </form>
@endsection