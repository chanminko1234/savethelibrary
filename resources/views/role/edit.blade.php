{{-- @extends("layout.app") --}}

@section("content")
<section class="content-header">
  <h1>
    Role
    <small>Edit</small>
</h1>
</section>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('backend/role/' . $role->id) }}" method="POST">
                            <input type="hidden" name="_method" value="patch">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label" for="role">Role</label>
                                <br>

                                @if($errors->has('name'))
                                <label class="text-danger" for="role"><small>{{ $errors->first('name') }}</small></label>
                                @endif
                                <input class="form-control" type="text" name="name" value="{{ $role->name }}" />
                            </div>
                            <div class="form-group">
                               <label class="control-label" for="slug">Slug</label>
                               <br>
                               @if($errors->has('slug'))
                               <label class="text-danger" for="slug"><small>{{ $errors->first('slug') }}</small></label>
                               @endif
                               <input class="form-control" type="text" name="slug" value="{{ $role->slug }}" />
                           </div>


                           <label class="control-label" for="slug">Permission</label>
                           <div class="row">
                             <div class="form-group col-md-3">
                                <label class="control-label" for="slug">Is Admin</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="role_permission[admin]" value="true"  
                                        @if($role->permissions['admin'] == true)
                                        checked
                                        @endif>admin</label>
                                    </div>
                                </div>

                                <div class="form-group col-md-3">
                                 <label class="control-label" for="slug">User</label>

                                 <div class="checkbox">
                                     <label><input type="checkbox" name="role_permission[user.show]" value="true" @if($role->permissions['user.show'] == true)
                                        checked
                                        @endif>User Show</label>
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
                                        <label><input type="checkbox" name="role_permission[role.show]" value="true" @if($role->permissions['role.show'] == true)
                                            checked
                                            @endif>Role Show</label>
                                        </div>

                                        <div class="checkbox">
                                            <label><input type="checkbox" name="role_permission[role.create]" value="true" @if($role->permissions['role.create'] == true)
                                                checked
                                                @endif>Role Create</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="role_permission[role.edit]" value="true" @if($role->permissions['role.edit'] == true)
                                                    checked
                                                    @endif>Role Edit</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="role_permission[role.delete]" value="true" @if($role->permissions['role.delete'] == true)
                                                        checked
                                                        @endif>Role Delete</label>
                                                    </div>
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                    </div>                    
                                </div>
                            </div>            
                        </div>        
                    </div>    
                </div>
                @endsection