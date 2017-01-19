@extends("layout.app")

@section("content")
<section class="content-header">
	<h1>
		Role
		<small>List</small>
	</h1>
</section>
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header with-border">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Role Name</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($roles as $role)
						<tr>
							<td>{{ $role->id }}</td>
							
							<td>{{ $role->name }}</td>

							

							<td>
								<a class="btn btn-primary" href="{{ route('role.edit',$role->id) }}">Edit</a>
							</td>
							
							<td>
								<form action="{{ route('role.destroy', $role->id) }}" method="post">
									{{ csrf_field() }}
									{{ method_field('delete') }}
									<button class="btn btn-danger">Delete</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
						{{-- @foreach($products as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td><a href="{{ route('product.show', $blog->id) }}">{{ $product->product_name }}</a></td>
			<td><a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>
			</td>
			<td>
				<form action="{{ route('product.destroy', '1') }}" method="post">
					{{ csrf_field() }}
					{{ method_field('delete') }}
					<button class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach --}}
		
	</table>
</div>
</div>
</div>
</div>

@endsection