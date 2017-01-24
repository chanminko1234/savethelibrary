@extends('layout.app')

@section('content')

<div class="container">
	<div class="row">
		



		<div class="col-md-12">





			<ol class='breadcrumb'>
				<li><a href='/'>Home</a></li>
				<li class="active">Books</li>
				
			</ol>
			<h2>Books List</h2>
			<hr/>
			

			
			@if($books->count()>0)

			<table class="table table-hover table-bordered table-striped book_table table-responsive">

				<thead>
					<th>Id</th>
					<th>Image</th>
					<th>Book Name</th>
					<th>Author</th>
					<th>Category</th>
					<th>Action</th>
				</thead>

				<tbody>

					@foreach($books as $book)

					<tr>
						<td>{{$book->id}}</td>
						<td class="img_td"><img src="{{ asset('images/image07.jpg')}}" alt="" class="book_img text-center"></td>
						<td><a href="/book/{{ $book->id }}-{{ $book->slug }}">{{$book->book_name}}</a></td>
						<td>{{$book->author}}</td>
						<td>{{$book->category}}</td>
						<td class="edit_btn"><a href="{{url('backend/book/'.$book->id.'/edit')}}"><button type="button" class="btn btn-lg btn-primary">Edit</button></a></td>

					</tr>

					@endforeach


				</tbody>

			</table>

			@else

			Sorry, no Books

			@endif


			<div> <a href="book/create">
				<button type="button" class="btn btn-lg btn-primary">
					Create New
				</button></a>
			</div>

			{{ $books->links() }}














		</div>
	</div>
</div>

@endsection