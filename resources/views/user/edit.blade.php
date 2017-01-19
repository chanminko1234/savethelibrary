@extends("layout.app")

@section("content")
<section class="content-header">
	<h1>
		user
		<small>List</small>
	</h1>
</section>
<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header with-border">
				<form action="{{ url('backend/user/' . $user->id) }}" method="post">
					<input type="hidden" name="_method" value="patch">
					{{ csrf_field() }}
					<div class="form-group has-feedback">
						<input name="name" type="text" class="form-control" placeholder="Full name" value="{{ $user->first_name }}">
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
						@if($errors->has("name"))
						<span class="text-danger">{{ $errors->first("name")}}</span>  
						@endif
					</div>
					<div class="form-group has-feedback">
						<input name="email" type="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						@if($errors->has("email"))
						<span class="text-danger">{{ $errors->first("email")}}</span>  
						@endif
					</div>

					<div class="row">
						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary">Edit</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection