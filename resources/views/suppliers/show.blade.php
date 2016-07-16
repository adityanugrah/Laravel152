@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/suppliers">Supplier</a></li>
        <li class="active">Detil Supplier</li>
    </ol>

    <h1>PT. {{ $suppliers->CompanyName }}</h1>

    <dl class="dl-horizontal">
        <dt>Contact Name</dt>
        <dd>{{ $suppliers->ContactName }}</dd>
		
		<dt>Title</dt>
        <dd>{{ $suppliers->ContactTitle }}</dd>
		
		<dt>Address</dt>
        <dd>{{ $suppliers->Address }}</dd>
		
		<dt>City</dt>
        <dd>{{ $suppliers->City }}</dd>
		
		<dt>Region</dt>
        <dd>{{ $suppliers->Region }}</dd>
		
		<dt>Postal Code</dt>
        <dd>{{ $suppliers->PostalCode }}</dd>
		
		<dt>Country</dt>
        <dd>{{ $suppliers->Country }}</dd>
		
		<dt>Phone</dt>
        <dd>{{ $suppliers->Phone }}</dd>
		
		<dt>Fax</dt>
        <dd>{{ $suppliers->Fax }}</dd>
		
		<dt>Home Page</dt>
        <dd>{{ $suppliers->HomePage }}</dd>
		       
    </dl>

    <a href="/suppliers/{{ $suppliers->SupplierID }}/edit" class="btn btn-default" data-toggle="tooltip" title="Ubah Data">
        <span class="glyphicon glyphicon-pencil"></span> Ubah
    </a> 

    <form method="POST" action="/suppliers/{{ $suppliers->SupplierID }}" style="display: inline;">
        {{ method_field('DELETE') }} {{ csrf_field() }}

        <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus Data">
            <span class="glyphicon glyphicon-trash"></span> Hapus
        </button>
    </form>
@endsection