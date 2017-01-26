@extends('layout.app')


@section('content')

<div class="container">

  <h2>Latest News</h2>


  <!-- delete button -->

  <div class="form-group pull-right">
    <form class="form" role="form" method="POST" action="{{ url('backend/latest-news/'. $LatestNew->id) }}">
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

   <h4>{{ $LatestNew->image_name
     . '.' .
     $LatestNew->image_extension }}
   </h4>

 </div>

 <div class="control-label">Thumbnail:</div>
 <!-- image thumbnail -->
 <div>

  <img src="{{ $LatestNew->showImage($LatestNew, $thumbnailPath) }}">
</div>

<form class="form" role="form" method="POST" action="{{ url('backend/latest-news/' . $LatestNew->id) }}" enctype="multipart/form-data">

  <input type="hidden" name="_method" value="patch">

  {{ csrf_field() }}

  <!-- image file Form Input -->

  <div class="form-group">
    <label class="control-label">Image
    </label>
    <input type="file" name="image" id="image">
  </div>

  @if ($errors->has('image'))

  <span class="help-block">
    <strong>{{ $errors->first('image') }}</strong>
  </span>

  @endif

  <label class="control-label">News Title</label>
  <input type="text" class="form-control"
  name="news_title" value="{{$LatestNew->news_title}}">

  @if ($errors->has('news_title'))
  <span class="help-block">
    <strong>{{ $errors->first('news_title') }}</strong>
  </span>
  @endif
  
  <label class="control-label">News Description</label>
  <textarea name="news_description" id="summernote" cols="30" rows="10">{!! $LatestNew->news_description !!}</textarea>


  @if ($errors->has('news_description'))
  <span class="help-block">
    <strong>{{ $errors->first('news_description') }}</strong>
  </span>
  @endif
  <label class="control-label">Location</label>
  <input type="text" class="form-control" name="location" value="{{ $LatestNew->location}}">

  @if ($errors->has('location'))
  <span class="help-block">
    <strong>{{ $errors->first('location') }}</strong>
  </span>
  @endif
  <label class="control-label">Date</label>
  <input type="text" class="form-control" name="date" value="{{$LatestNew->date}}">

  @if ($errors->has('date'))
  <span class="help-block">
    <strong>{{ $errors->first('date') }}</strong>
  </span>
  @endif
  <label class="control-label">Time</label>
  <input type="text" class="form-control"
  name="time" value="{{$LatestNew->time}}">

  @if ($errors->has('time'))
  <span class="help-block">
    <strong>{{ $errors->first('time') }}</strong>
  </span>
  @endif
  <label class="control-label">Contact</label>
  <input type="text" class="form-control"
  name="contact" value="{{$LatestNew->contact}}">

  @if ($errors->has('contact'))
  <span class="help-block">
    <strong>{{ $errors->first('contact') }}</strong>
  </span>
  @endif

  <br>

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











