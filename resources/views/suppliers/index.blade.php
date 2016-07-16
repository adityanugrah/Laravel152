@extends('master')

@section('konten_utama')
    <h1>
        Supplier
        <a href="suppliers/create" class="btn btn-primary">Add New</a>
    </h1>

    <table class="table table-condensed table-hover">
        <thead>
            <th>No.</th>
            <th>Company Name</th>
            <th>Contact Name</th>
            <th>Phone</th>
            <th>Fax</th>
            <th></th>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($suppliers as $supplier)
                <tr>
                   <td>
						<?php echo ($i++ + ($suppliers->currentPage() *$suppliers->perPage())-$suppliers->perPage()); ?>
					</td>
                    <td>
                        <a href="suppliers/{{ $supplier->SupplierID }}">
                            PT. {{ $supplier->CompanyName }}
                        </a>
                    </td>
                    <td>{{ $supplier->ContactName }}</td>
                    <td>{{ $supplier->Phone }}</td>
                    <td>{{ $supplier->Fax }}</td>
                    <td>
                        <a href="/suppliers/{{ $supplier->SupplierID }}/edit" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ubah Data">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a> 

                        <form method="POST" action="/suppliers/{{ $supplier->SupplierID }}" style="display: inline;">
                            {{ method_field('DELETE') }}{{ csrf_field() }}

                            <button type="submit" class="btn btn-danger btn-xs delete-confirm" data-toggle="tooltip" title="Hapus Data">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
	<div class="pull-right">{!! $suppliers->links() !!}</div>
@endsection