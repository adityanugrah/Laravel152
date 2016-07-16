@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/shippers">Shippers</a></li>
        <li class="active">Detil Shippers</li>
    </ol>

    <h1>PT. {{ $shippers->CompanyName }}</h1>

    <dl class="dl-horizontal">
        <dt>Shipper ID</dt>
        <dd>{{ $shippers->ShipperID }}</dd>

        <dt>Company Name</dt>
        <dd>PT. {{ $shippers->CompanyName }}</dd>

        <dt>Phone</dt>
        <dd>{{ $shippers->Phone }}</dd>
    </dl>

    <a href="/shippers/{{ $shippers->ShipperID }}/edit" class="btn btn-default" data-toggle="tooltip" title="Ubah Data">
        <span class="glyphicon glyphicon-pencil"></span> Ubah
    </a> 

    <form method="POST" action="/shippers/{{ $shippers->ShipperID }}" style="display: inline;">
        {{ method_field('DELETE') }} {{ csrf_field() }}

        <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus Data">
            <span class="glyphicon glyphicon-trash"></span> Hapus
        </button>
    </form>
@endsection