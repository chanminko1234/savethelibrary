@extends('layout.app')

@section('content')

<div class="container">
	<div class="row">
		



		<div class="col-md-12">





			<ol class='breadcrumb'>
				<li><a href='/'>Home</a></li>
				<li><a href='/widget'>Books</a></li>
				<li class='active'>Create</li>
			</ol>
			<h2>Create a New Widget</h2>
			<hr/>
			<form class="form" role="form" method="POST" action="{{ url('/widget') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<!-- name Form Input -->
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<label class="control-label">Book Name</label>
					<input type="text" class="form-control"
					name="name" value="{{ old('name') }}">
					@if ($errors->has('name'))
					<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
					@endif

					<label class="control-label">Author</label>
					<input type="text" class="form-control" name="author">


					<label class="control-label">Book Description</label>
					<div id="summernote">Hello Summernote</div>

					<label class="control-label">Book Review</label>
					<div id="summernote2">Hello Summernote</div>




					<label class="control-label">Library Address</label>
					<textarea class="form-control" rows="5" name="library_address"></textarea> 


					<label class="control-label">Library Name</label>
					<input type="text" class="form-control" name="library_name">


					<label class="control-label">Category</label>
					<select class="form-control" id="is_featured" name="is_featured">
						<option value="{{old('is_featured')}}">
							{{ ! is_null(old('is_featured')) ?
							(old('is_featured') == 1 ? 'Yes' :'No')
							: 'Please Choose One'}}</option>
							<option value="1">Yes</option>
							<option value="0">No</option>
						</select>


						<label class="control-label">Download Link</label>
						<input type="text" class="form-control" name="download_link">




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