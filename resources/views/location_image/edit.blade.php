@extends('layout.app')


@section('content')

<div class="container">

    <h2>Update Location</h2>

    <hr/>

    <!-- delete button -->

    <div class="form-group pull-right">

        <form class="form" role="form" method="POST" action="{{ url('backend/location_image/'. $locationImage->id) }}">
            <input type="hidden" name="_method" value="delete">
            {{ csrf_field() }}

            <input class="btn btn-lg btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

        </form>
    </div>

    <!-- image name no input -->
    <div>

        <div class="control-label">
         Image Name:

     </div>

     <h4>{{ $locationImage->image_name
         . '.' .
         $locationImage->image_extension }}
     </h4>

 </div>
 <br>

 <div class="control-label">Thumbnail:</div>
 <!-- image thumbnail -->
 <div>

    <img src="{{ $locationImage->showImage($locationImage, $thumbnailPath) }}">

</div>

<br>
<div class="form-group">
    <label class="control-label">Primary Image
    </label>
    <br>

    <input type="file" name="image" id="image">
</div>

@if ($errors->has('image'))

<span class="help-block">
    <strong>{{ $errors->first('image') }}</strong>
</span>

@endif
<br>

<form class="form" role="form" method="POST" action="{{ url('backend/location_image/' . $locationImage->id) }}" enctype="multipart/form-data">

    <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}



    <!-- image file Form Input -->

    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">


     <label class="control-label">Location Name</label>
     <input type="text" class="form-control"
     name="location_name" value="{{$locationImage->location_name}}">

     @if ($errors->has('location_name'))
     <span class="help-block">
        <strong>{{ $errors->first('location_name') }}</strong>
    </span>
    @endif
    <label class="control-label">Location Description</label>
    <input type="text" class="form-control" name="location_desc" value="{{$locationImage->location_desc}}">

    @if ($errors->has('location_desc'))
    <span class="help-block">
        <strong>{{ $errors->first('location_desc') }}</strong>
    </span>
    @endif
    <label class="control-label">Location Address</label>
    <textarea name="location_address" id="summernote" cols="30" rows="10">{!! $locationImage->location_address !!}</textarea>


    @if ($errors->has('location_address'))
    <span class="help-block">
        <strong>{{ $errors->first('location_address') }}</strong>
    </span>
    @endif
    <label class="control-label">Location Content</label>
    <input type="text" class="form-control" name="location_content" value="{{$locationImage->location_content}}">

    @if ($errors->has('location_content'))
    <span class="help-block">
        <strong>{{ $errors->first('location_content') }}</strong>
    </span>
    @endif

    <label class="control-label">Location Review</label>
    <textarea name="location_review" id="summernote2" cols="30" rows="10">{!! $locationImage->location_review !!}</textarea>

    @if ($errors->has('location_review'))
    <span class="help-block">
        <strong>{{ $errors->first('location_review') }}</strong>
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