@extends('layout.app')
@section('content')
<div class="container">
	<div class="col-md-12">
		<h2>Create a New Resource Center</h2>
		<hr/>
		<form class="form" role="form" method="POST" action="{{ url('backend/resourcecenter-image') }}" enctype="multipart/form-data">
			{{ csrf_field() }} 
			<!-- book_name Form Input -->
			<div class="form-group{{ $errors->has('book_name') ? ' has-error' : '' }}">
				<label class="control-label">Book Name</label>
				<input type="text" class="form-control" name="book_name"
				value="{{ old('book_name') }}">
				@if ($errors->has('book_name'))
				<span class="help-block">
					<strong>{{ $errors->first('book_name') }}</strong>
				</span>
				@endif
			</div>

			<!-- category-name Form Input -->
			<div class="form-group{{ $errors->has('category_name') ?
				' has-error' : '' }}">
				<label class="control-label">Category Name</label>
				<input type="text" class="form-control" name="category_name"
				value="{{ old('category_name') }}">
				@if ($errors->has('category_name'))
				<span class="help-block">
					<strong>{{ $errors->first('category_name') }}</strong>
				</span>
				@endif
			</div>

			<!-- image file Form Input -->
			<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
				<div class="form-group">
					<label class="control-label">Primary Image
					</label>
					<input type="file" name="image" id="image">
				</div>
				@if ($errors->has('image'))
				<span class="help-block">
					<strong>{{ $errors->first('image') }}</strong>
				</span>
				@endif
				<div class="form-group{{ $errors->has('download') ? ' has-error' : '' }}">
					<label class="control-label">Download Links</label>
					<input type="text" class="form-control" name="download"
					value="{{ old('download') }}">
					@if ($errors->has('download'))
					<span class="help-block">
						<strong>{{ $errors->first('download') }}</strong>
					</span>
					@endif
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg">
						Create
					</button>
				</div>
			</div>
		</form>
	</div>
</div>











@endsection