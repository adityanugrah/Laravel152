@extends('master')

@section('konten_utama')
    <h1>
        Customers
        <a href="customers/create" class="btn btn-primary">Add New</a>
    </h1>

    <table class="table table-condensed table-hover">
        <thead>
            <th>No.</th>
            <th>Customer ID</th>
            <th>Company Name</th>
            <th>Contact Name</th>
            <th>Phone</th>
            <th>Fax</th>
            <th></th>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($customers as $customer)
                <tr>
                    <td>
						<?php echo ($i++ + ($customers->currentPage() *$customers->perPage())-$customers->perPage()); ?>
					</td>
                    <td>
                        <a href="customers/{{ $customer->CustomerID }}">
                            {{ $customer->CustomerID }}
                        </a>
                    </td>
                    <td>PT. {{ $customer->CompanyName }}</td>
                    <td>{{ $customer->ContactName }}</td>
                    <td>{{ $customer->Phone }}</td>
                    <td>{{ $customer->Fax }}</td>
                    <td>
                        <a href="/customers/{{ $customer->CustomerID }}/edit" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ubah Data">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a> 

                        <form method="POST" action="/customers/{{ $customer->CustomerID }}" style="display: inline;">
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
	<div class="pull-right">{!! $customers->links() !!}</div>
@endsection