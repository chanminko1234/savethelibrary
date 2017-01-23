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
							<td>ID</td>
							<td>Role Name</td>
							<td></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($roles as $role)
						<tr>
							<td>{{ $role->id }}</td>
							
							<td>{{ $role->name }}</td>


							<td>
								<a class="btn btn-primary" href="{{ route('role.edit', $role->id) }}">Edit</a>
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
					
				</table>
			</div>
		</div>
	</div>
</div>

@endsection