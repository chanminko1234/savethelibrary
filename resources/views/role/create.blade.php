@extends("layout.app")

@section("content")
<section class="content-header">
  <h1>
    Role
    <small>create</small>
</h1>
</section>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('backend/role') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label" for="role">Role</label>
                                <br>
                                @if($errors->has('role'))
                                <label class="text-danger" for="role"><small>{{ $errors->first('role') }}</small></label>
                                @endif
                                <input class="form-control" type="text" name="role" value="{{ old('role') }}" />
                            </div>
                            <div class="form-group">
                             <label class="control-label" for="slug">Slug</label>
                             <br>
                             @if($errors->has('slug'))
                             <label class="text-danger" for="slug"><small>{{ $errors->first('slug') }}</small></label>
                             @endif
                             <input class="form-control" type="text" name="slug" value="{{ old('slug') }}" />
                         </div>
                         
                         <label class="control-label" for="slug">Permission</label>
                         <div class="row">
                         <div class="form-group col-md-3">
                            <label class="control-label" for="slug">Is Admin</label>
                            <div class="checkbox">
                                <label><input type="checkbox" name="role_permission[admin]" value="true">admin</label>
                            </div>
                         </div>
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