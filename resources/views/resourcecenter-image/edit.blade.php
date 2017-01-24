@extends('layout.app')

@section('content')
<div class="container">
    <div class="col-md-12">

        <h2>Update Image</h2>

        <hr/>

        <!-- delete button -->

        <div class="form-group pull-right">

            <form class="form" role="form" method="POST" action="{{ url('backend/resourcecenter-image/'. $resourcecenterImage->id) }}">
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}

                <input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

            </form>
        </div>

        <!-- image name no input -->
        <div>

            <div class="control-label">
               Image Name:

           </div>

           <h4>{{ $resourcecenterImage->image_name
               . '.' .
               $resourcecenterImage->image_extension }}
           </h4>

       </div>

       <div class="control-label">Thumbnail:</div>
       <!-- image thumbnail -->
       <div>

         <img src="{{ $resourcecenterImage->showImage($resourcecenterImage, $thumbnailPath) }}">

     </div>

     <br>

     <form class="form" role="form" method="POST"
     action="{{ url('backend/resourcecenter-image/' . $resourcecenterImage->id) }}"
     enctype="multipart/form-data">

     <input type="hidden" name="_method" value="patch">

     {{ csrf_field() }}
     <!-- image_name Form Input -->
     <div class="form-group{{ $errors->has('image_name') ? ' has-error' : '' }}">
        <label class="control-label">Image Name</label>
        <input type="text" class="form-control" name="image_name"
        value="{{ $resourcecenterImage->image_name }}">
        @if ($errors->has('image_name'))
        <span class="help-block">
            <strong>{{ $errors->first('image_name') }}</strong>
        </span>
        @endif
    </div>

    <!-- category_name Form Input -->
    <div class="form-group{{ $errors->has('category_name') ?
        ' has-error' : '' }}">
        <label class="control-label">Category Name</label>
        <input type="text" class="form-control" name="category_name"
        value="{{ $resourcecenterImage->category_name }}">
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

        <!-- Submit Button -->

        <div class="form-group">

            <button type="submit" class="btn btn-primary btn-lg">

                Update

            </button>

        </div>
    </div>

</form>

</div>
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