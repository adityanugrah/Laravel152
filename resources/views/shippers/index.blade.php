@extends('master')

@section('konten_utama')
    <h1>
        Shippers
        <a href="shippers/create" class="btn btn-primary">Add New</a>
    </h1>

    <table class="table table-condensed table-hover">
        <thead>
            <th>No.</th>
            <th>Company Name</th>
            <th>Phone</th>
            <th></th>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($shippers as $shipper)
                <tr>
                    <td>
						<?php echo ($i++ + ($shippers->currentPage() *$shippers->perPage())-$shippers->perPage()); ?>
					</td>
                    <td>
                        <a href="shippers/{{ $shipper->ShipperID }}">
                            PT. {{ $shipper->CompanyName }}
                        </a>
                    </td>
                    <td>{{ $shipper->Phone }}</td>
                    <td>
                        <a href="/shippers/{{ $shipper->ShipperID }}/edit" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ubah Data">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a> 

                        <form method="POST" action="/shippers/{{ $shipper->ShipperID }}" style="display: inline;">
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
	<div class="pull-right">{!! $shippers->links() !!}</div>
@endsection