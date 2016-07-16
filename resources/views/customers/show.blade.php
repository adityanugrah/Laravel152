@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/customers">Customers</a></li>
        <li class="active">Detil Customers</li>
    </ol>

    <h1>PT. {{ $customers->CompanyName }}</h1>

    <dl class="dl-horizontal">
        <dt>Contact Name</dt>
        <dd>{{ $customers->ContactName }}</dd>

        <dt>Title</dt>
        <dd>{{ $customers->ContactTitle }}</dd>

        <dt>Address</dt>
        <dd>{{ $customers->Address }}</dd>

        <dt>City</dt>
        <dd>{{ $customers->City }}</dd>

        <dt>Region</dt>
        <dd>{{ $customers->Region }}</dd>

        <dt>Postal Code</dt>
        <dd>{{ $customers->PostalCode }}</dd>

        <dt>Country</dt>
        <dd>{{ $customers->Country }}</dd>
		
		<dt>Phone</dt>
        <dd>{{ $customers->Phone }}</dd>
		
		<dt>Fax</dt>
        <dd>{{ $customers->Fax }}</dd>		
    </dl>

    <a href="/customers/{{ $customers->CustomerID }}/edit" class="btn btn-default" data-toggle="tooltip" title="Ubah Data">
        <span class="glyphicon glyphicon-pencil"></span> Ubah
    </a> 

    <form method="POST" action="/customers/{{ $customers->CustomerID }}" style="display: inline;">
        {{ method_field('DELETE') }} {{ csrf_field() }}

        <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus Data">
            <span class="glyphicon glyphicon-trash"></span> Hapus
        </button>
    </form>
@endsection