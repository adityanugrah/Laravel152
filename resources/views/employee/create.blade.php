@extends('master')

@section('konten_utama')
	@include('employee._breadcrumb')
        <li class="active">Detail Employee</li>
    </ol>

    <h1>Add New Employee</h1>

   <form method="POST" action="{{ route('employee.store') }}" class="form-horizontal" enctype="multipart/form-data">
   	{{ csrf_field() }}
        @include('employee._form')
    </form>
@endsection