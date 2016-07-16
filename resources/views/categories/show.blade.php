@extends('master')

@section('konten_utama')
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/categories">Category</a></li>
        <li class="active">Detil Category</li>
    </ol>

    <h1>{{ $categories->CategoryID }}</h1>

    <dl class="dl-horizontal">
        <dt>Category Name</dt>
        <dd>{{ $categories	->CategoryName }}</dd>

		<dt>Description</dt>
        <dd>{{ $categories	->Description }}</dd>
		
		<dt>Picture</dt>
        <dd><img src="/public/foto/category/{{$categories->Picture}}" style="width:75px; height:50px;"></dd>
    </dl>

    <a href="/categories/{{ $categories->CategoryID }}/edit" class="btn btn-default" data-toggle="tooltip" title="Ubah Data">
        <span class="glyphicon glyphicon-pencil"></span> Ubah
    </a> 

    <form method="POST" action="/categories/{{ $categories->CategoryID }}" style="display: inline;">
        {{ method_field('DELETE') }}{{ csrf_field() }}

        <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus Data">
            <span class="glyphicon glyphicon-trash"></span> Hapus
        </button>
    </form>
@endsection