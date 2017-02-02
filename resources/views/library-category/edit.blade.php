@extends('layout.app')

@section('content')
<div class="container">
	<!-- delete button -->
	

	<div class="form-group pull-right">


		
		<form class="form" role="form" method="POST" action="{{ url('backend/library-category/delete/'. $category->id) }}">
			<input type="hidden" name="_method" value="delete">
			{{ csrf_field() }}

			<input class="btn btn-lg btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">




		</form>
	</div> 
	
	

  


    <form class="form" role="form" method="GET" action="{{ url('backend/update-category/' . $category->id) }}" enctype="multipart/form-data">

    	<input type="hidden" name="_method" value="patch">

    	<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

    		<label class="control-label">Category Title</label>
    		<input type="text" class="form-control"
    		name="title" value="{{$category->title}}">

    		@if ($errors->has('title'))
    		<span class="help-block">
    			<strong>{{ $errors->first('title') }}</strong>
    		</span>
    		@endif
    	</div>

    	<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

    		<label class="control-label">Child Title</label>
    		<input type="text" class="form-control"
    		name="title" value="{{$category->childs}}">

    		@if ($errors->has('title'))
    		<span class="help-block">
    			<strong>{{ $errors->first('title') }}</strong>
    		</span>
    		@endif
    	</div>

    	<div class="form-group">

    		<button type="submit" class="btn btn-primary btn-lg">

    			Update

    		</button>

    	</div>

    </form>



</div>

@endsection

@section('scripts')
<script>
	function ConfirmDelete()
	{
		var x = confirm("Are you sure you want to delete?");
		if (x)
			return true;
		else
			return false;
	}
</script>


@endsection