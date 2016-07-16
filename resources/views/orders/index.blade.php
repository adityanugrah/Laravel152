@extends('master')

@section('konten_utama')
    <h1>
        Orders
    </h1>

    <table class="table table-condensed table-hover">
        <thead>
			<th>No.</th>
			<th>Customer ID</th>
			<th>Employee ID</th>
			<th>Order Date</th>
			<th>Shipped Date</th>
			<th>Approved By</th>
			<th></th>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($orders as $order)
                <tr>
                    <td>
						<?php echo ($i++ + ($orders->currentPage() *$orders->perPage())-$orders->perPage()); ?>
					</td>
                    <td>
                        <a href="order/{{ $order->OrderID }}">
                            {{ $order->OrderID }}
                        </a>
                    </td>
                    <td>
						<span data-toggle="tooltip" data-placement="right" title="PT. {{ $order->CompanyName }}">
                            {{ $order->CustomerID }}
                        </span>
					</td>
					<td>{{ date_format(date_create($order->OrderDate), 'd-F-Y') }}</td>
                    <td>{{ date_format(date_create($order->ShippedDate), 'd-F-Y') }}</td>
					<td>{{ $order->FirstName }} {{ $order->LastName }}</td>
                    <td>
                        <a href="/order/{{ $order->OrderID }}/edit" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ubah Data">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a> 

                        <form method="POST" action="/order/{{ $order->OrderID }}" style="display: inline;">
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
	<div class="pull-right">{!! $orders->links() !!}</div>
@endsection