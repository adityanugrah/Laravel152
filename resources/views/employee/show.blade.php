@extends('master')

@section('konten_utama')
	 @include('employee._breadcrumb')
        <li class="active">Detail Employee</li>
    </ol>

    <h1>{{ $employee->full_name }}</h1>

    <dl class="dl-horizontal">
		<dt>Title</dt>
        <dd>{{ $employee->Title }}</dd>
		
		<dt>Title Of Courtesy</dt>
        <dd>{{ $employee->TitleOfCourtesy }}</dd>
		
		<dt>Birth Date</dt>
        <dd>{{ $employee->birth_date_formatted }}</dd>
		
		<dt>Hire Date</dt>
        <dd>{{ $employee->hire_date_formatted }}</dd>
		
		<dt>Address</dt>
        <dd>{{ $employee->Address }}</dd>
		
		<dt>City</dt>
        <dd>{{ $employee->City }}</dd>
		
		<dt>Region</dt>
        <dd>{{ $employee->Region }}</dd>
		
		<dt>Postal Code</dt>
        <dd>{{ $employee->PostalCode }}</dd>
		
		<dt>Country</dt>
        <dd>{{ $employee->Country }}</dd>
		
		<dt>Home Phone</dt>
        <dd>{{ $employee->HomePhone }}</dd>
		
		<dt>Extension</dt>
        <dd>{{ $employee->Extension }}</dd>
		
		<dt>Photo</dt>
        <dd><img src="/public/foto/employee/{{$employee->Photo}}" style="width:75px; height:50px;"></dd>
		
		<dt>Notes</dt>
        <dd>{{ $employee->Notes }}</dd>
		
		<dt>Reports To</dt>
        <dd>{{ $employee->ReportsTo }}</dd>
		
		<dt>Salary</dt>
        <dd>{{ $employee->salary_formatted }}</dd>
		
		<dt>Photo Path</dt>
        <dd>{{ $employee->PhotoPath }}</dd>
    </dl>

    <a href="{{ route('employee.edit', $employee->getKey()) }}" class="btn btn-default" data-toggle="tooltip" title="Ubah Data">
        <span class="glyphicon glyphicon-pencil"></span> Ubah
    </a> 

    <form method="POST" action="{{ route('employee.destroy', $employee->getKey()) }}" style="display: inline;">
        {{ method_field('DELETE') }}

        <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus Data">
            <span class="glyphicon glyphicon-trash"></span> Hapus
        </button>
    </form>
@endsection