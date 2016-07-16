@extends('master')

@section('konten_utama')
    <h1>
        Category
        <a href="categories/create" class="btn btn-primary">Add New</a>
    </h1>

    <table class="table table-condensed table-hover">
        <thead>
           <th>No.</th>
			<th>Nama</th>
			<th>Deskripsi</th>
			<th>Picture</th>
			<th>Action</th>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($categories as $category)
                <tr>
                    <td>
						<?php echo ($i++ + ($categories->currentPage() *$categories->perPage())-$categories->perPage()); ?>
					</td>
                    <td>
                        <a href="categories/{{ $category->CategoryID }}">
                            {{ $category->CategoryName }}
                        </a>
                    </td>
                    <td>{{$category->Description}}</td>					
					<td>
						<img src="/public/foto/category/{{$category->Picture}}" style="width:75px; height:50px;">
					</td>
					
                    <td>
                        <a href="/categories/{{ $category->CategoryID }}/edit" class="btn btn-default btn-xs" data-toggle="tooltip" title="Ubah Data">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a> 

                        <form method="POST" action="/categories/{{ $category->CategoryID }}" style="display: inline;">
                            {{ method_field('DELETE') }} {{csrf_field()}}

                            <button type="submit" class="btn btn-danger btn-xs delete-confirm" data-toggle="tooltip" title="Hapus Data">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
	<div class="pull-right">{!! $categories->links() !!}</div>
@endsection