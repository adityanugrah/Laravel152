@extends('master')

@section('konten_utama')
	@include('employee._breadcrumb')
        <li class="active">Detail Employee</li>
    </ol>

    <h1>Employee ID: {{ $employee->getKey() }}</h1>

   <form method="POST" action="{{ route('employee.update', $employee->getKey()) }}" class="form-horizontal" enctype="multipart/form-data">
        {{ method_field('PATCH') }}

        @include('employee._form')
    </form>
@endsection