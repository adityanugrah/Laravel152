@extends('master')

@section('konten_utama')
    <h1>
        Products
        <a href="products/create" class="btn btn-primary">Add New</a>
    </h1>

    <table class="table table-condensed table-hover">
        <thead>
            <th>No.</th>
            <th>Name</th>
            <th>Category</th>
            <th>Quantity Of Unit</th>
            <th>Stock (pcs)</th>
            <th>Unit Price ($)</th>
            <th></th>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($products as $product)
                <tr>
                    <td>
						<?php echo ($i++ + ($products->currentPage() *$products->perPage())-$products->perPage()); ?>
					</td>
                    <td>
                        <a href="products/{{ $product->ProductID }}">
                            {{ $product->ProductName }}
                        </a>
                    </td>
                    <td>
						@if ( isset($product->category->CategoryName)) 
							{{ $product->category->CategoryName }}
						@endif
					</td>
                    <td>{{ $product->QuantityPerUnit }}</td>
                    <td>{{ $product->UnitsInStock }}</td>
                    <td>{{ $product->UnitPrice }}</td>
                    <td>
                        <a href="/products/{{ $product->ProductID }}/edit" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ubah Data">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a> 

                        <form method="POST" action="/products/{{ $product->ProductID }}" style="display: inline;">
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
	<div class="pull-right">{!! $products->links() !!}</div>
@endsection