@extends('layout.app')
@section('content')
<section class="content-header">
	<h1>
		Author
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
							<td>Author Name</td>
							<td></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($authors as $author)
						<tr>
							<td>{{ $author->id }}</td>
							
							<td>{{ $author->author_name }}</td>


							<td>
								<a class="btn btn-primary" href="{{ route('author.edit', $author->id) }}">Edit</a>
							</td>
							
							<td>
								<form action="{{ route('author.destroy', $author->id) }}" method="post">
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