@extends('master')

@section('konten_utama')
    <h1>
        Employee
       <a href="{{ route('employee.create') }}" class="btn btn-primary">Add New</a>
    </h1>

    <table class="table table-condensed table-hover">
        <thead>
            <th>No.</th>
            <th>Full Name</th>
            <th>Title</th>
            <th>Phone</th>
            <th>Country</th>
            <th>Photo</th>
            <th></th	
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($employees as $employee)
                <tr>
                    <td>
						<?php echo ($i++ + ($employees->currentPage() *$employees->perPage())-$employees->perPage()); ?>
					</td>
                    <td>
                        <a href="{{ route('employee.show', $employee->getKey()) }}">
                            {{ $employee->full_name }}
                        </a>
                    </td>
                    <td>{{ $employee->Title }}</td>
                    <td>{{ $employee->HomePhone }}</td>
                    <td>{{ $employee->Country }}</td>
					<td>
						<img src="/public/foto/employee/{{$employee->Photo}}" style="width:75px; height:50px;">
					</td>
					
                    <td>
                         <a href="{{ route('employee.edit', $employee->getKey()) }}" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ubah Data">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a> 

                       <form method="POST" action="{{ route('employee.destroy', $employee->getKey()) }}" style="display: inline;">
                            {{ method_field('DELETE') }} {{ csrf_field() }}

                            <button type="submit" class="btn btn-danger btn-xs delete-confirm" data-toggle="tooltip" title="Hapus Data">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
	<div class="pull-right">{!! $employees->links() !!}</div>
@endsection