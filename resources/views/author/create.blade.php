@extends('layout.app')
@section('content')
<section class="content-header">
	<h1>
		Author
		<small>create</small>
	</h1>
</section>

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<form action="{{ url('backend/author') }}" method="POST">
							{{ csrf_field() }}
							<div class="form-group">
								<label class="control-label" for="author_name">Author</label>
								<br>
								@if($errors->has('author_name'))
								<label class="text-danger" for="author_name"><small>{{ $errors->first('author_name') }}</small></label>
								@endif
								<input class="form-control" type="text" name="author_name" value="{{ old('author_name') }}" />
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>                    
				</div>
			</div>            
		</div>        
	</div>    
</div>
@endsection