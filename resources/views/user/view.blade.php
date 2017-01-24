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
				<form action="{{ url('backend/user') }}" method="post">

					{{ csrf_field() }}
					<div class="form-group has-feedback">
						<input name="name" type="text" class="form-control" placeholder="Full name" value="{{ old('name') }}">
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
						@if($errors->has("name"))
						<span class="text-danger">{{ $errors->first("name")}}</span>  
						@endif
					</div>
					<div class="form-group has-feedback">
						<input name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
						<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						@if($errors->has("email"))
						<span class="text-danger">{{ $errors->first("email")}}</span>  
						@endif
					</div>
					<div class="form-group has-feedback">
						<input name="password" type="password" class="form-control" placeholder="Password" value="">
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						@if($errors->has("password"))
						<span class="text-danger">{{ $errors->first("password")}}</span>  
						@endif
					</div>
					<div class="form-group has-feedback">
						<input name="password_confirmation" type="password" class="form-control" placeholder="Retype password" value="">
						<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
						@if($errors->has("password_confirmation"))
						<span class="text-danger">{{ $errors->first("password_confirmation")}}</span>  

						@endif
					</div>
					


				

					<label class="control-label" for="slug">Permission</label>
					<div class="row">
						<div class="form-group col-md-3">
							<label class="control-label" for="slug">User</label>

							<div class="checkbox">
								<label><input type="checkbox" name="role_permission[user.show]" value="true">User Show</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" name="role_permission[user.create]" value="true">User Create</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="role_permission[user.edit]" value="true">User Edit</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="role_permission[user.delete]" value="true">User Delete</label>
							</div>
						</div>

						<div class="form-group col-md-3">
							<label class="control-label" for="slug">Role</label>
							<div class="checkbox">
								<label><input type="checkbox" name="role_permission[role.show]" value="true">Role Show</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" name="role_permission[role.create]" value="true">Role Create</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="role_permission[role.edit]" value="true">Role Edit</label>
							</div>
							<div class="checkbox">
								<label><input type="checkbox" name="role_permission[role.delete]" value="true">Role Delete</label>
							</div>
						</div>

						

						
					<div class="row">
						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Create</button>
						</div>
						<!-- /.col -->
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection