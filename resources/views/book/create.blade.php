@extends('layout.app')

@section('content')

<div class="container">
	<div class="row">
		



		<div class="col-md-12">





			<ol class='breadcrumb'>
				<li><a href='/'>Home</a></li>
				<li><a href="{{url('backend/books')}}">Books</a></li>
				<li class='active'>Create</li>
			</ol>
			<h2>Create a New Widget</h2>
			<hr/>
			<form class="form" role="form" method="POST" action="{{ url('backend/book') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<!-- name Form Input -->
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<label class="control-label">Book Name</label>
					<input type="text" class="form-control"
					name="book_name" value="{{ old('name') }}">

					@if ($errors->has('book_name'))
					<span class="help-block">
						<strong>{{ $errors->first('book_name') }}</strong>
					</span>
					@endif

					<label class="control-label">Author</label>
					<input type="text" class="form-control" name="author" value="{{ old('author') }}">

					@if ($errors->has('author'))
					<span class="help-block">
						<strong>{{ $errors->first('author') }}</strong>
					</span>
					@endif


					<label class="control-label">Book Description</label>
					<textarea name="book_description" id="summernote" cols="30" rows="10" value="{{ old('book_description') }}"></textarea>
					

					@if ($errors->has('book_description'))
					<span class="help-block">
						<strong>{{ $errors->first('book_description') }}</strong>
					</span>
					@endif

					<label class="control-label">Book Review</label>
					<textarea name="book_review" id="summernote2" cols="30" rows="10" value="{{ old('book_review') }}"></textarea>
					<!-- <div id="summernote2" name="book_review" value="{{ old('book_review') }}"><input type="text" class="form-control" name="book_review" value="{{ old('book_review') }}"></div> -->

					@if ($errors->has('book_review'))
					<span class="help-block">
						<strong>{{ $errors->first('book_review') }}</strong>
					</span>
					@endif


					<br>
					<br>


					<label class="control-label">Library Name</label>
					<input type="text" class="form-control" name="library_name" value="{{ old('library_name') }}">

					@if ($errors->has('library_name'))
					<span class="help-block">
						<strong>{{ $errors->first('library_name') }}</strong>
					</span>
					@endif

					
					<br>
					<br>


					<label class="control-label">Library Address</label>
					<textarea class="form-control" rows="5" name="library_address" value="{{ old('library_address') }}"></textarea> 

					@if ($errors->has('library_address'))
					<span class="help-block">
						<strong>{{ $errors->first('library_address') }}</strong>
					</span>
					@endif

					<br>
					<br>





					<label class="control-label">Library Contact</label>
					<input type="text" class="form-control" name="library_contact" value="{{ old('library_contact') }}">

					@if ($errors->has('library_contact'))
					<span class="help-block">
						<strong>{{ $errors->first('library_contact') }}</strong>
					</span>
					@endif

					<br>
					<br>


					<label class="control-label">Book Review Category</label>
					<select class="form-control" id="is_featured" name="category" value="{{ old('category') }}">
						<option value="{{old('is_featured')}}">
							{{ ! is_null(old('is_featured')) ?
							(old('is_featured') == 1 ? 'Yes' :'No')
							: 'Please Choose One'}}</option>
							<option value="1">Yes</option>
							<option value="0">No</option>
						</select>

						@if ($errors->has('category'))
						<span class="help-block">
							<strong>{{ $errors->first('category') }}</strong>
						</span>
						@endif

						<br>
						<br>


						


						<!-- 	<label class="control-label">Download Link</label>
							<input type="text" class="form-control" name="download_link">

							@if ($errors->has('download_link'))
							<span class="help-block">
								<strong>{{ $errors->first('download_link') }}</strong>
							</span>
							@endif

							<br>
							<br> -->


							<label class="control-label">Book Image
							</label>
							<input type="file" name="image" id="image" value="{{ old('image') }}">

							@if ($errors->has('image'))
							<span class="help-block">
								<strong>{{ $errors->first('image') }}</strong>
							</span>
							@endif











						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg">
								Create
							</button>
						</div>
					</form>








				</div>
			</div>
		</div>

		@endsection