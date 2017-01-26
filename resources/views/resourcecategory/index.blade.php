@extends('layout.app')
@section('content')
<section class="content-header">
	<h1>
		Resource Category
	</h1>
</section>
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header with-border">
				<table class="table table-striped">
					<thead>
						<tr>
							<td>ID</td>
							<td>Resource Category Name</td>
							<td></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
						<tr>
							<td>{{ $category->id }}</td>
							
							<td>{{ $category->category_name }}</td>


							<td>
								<a class="btn btn-primary" href="{{ route('resourcecategory.edit', $category->id) }}">Edit</a>
							</td>
							
							<td>
								<form action="{{ route('resourcecategory.destroy', $category->id) }}" method="post">
									{{ csrf_field() }}
									{{ method_field('delete') }}
									<button class="btn btn-danger">Delete</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
					
				</table>
			</div>
		</div>
	</div>
</div>













@endsection