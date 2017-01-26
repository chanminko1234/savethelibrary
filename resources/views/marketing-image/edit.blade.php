@extends('layout.app')


@section('content')

<div class="container">

   <h2>Update Book</h2>


   <!-- delete button -->

   <div class="form-group pull-right">
     <form class="form" role="form" method="POST" action="{{ url('backend/marketing-image/'. $marketingImage->id) }}">
        <input type="hidden" name="_method" value="delete">
        {{ csrf_field() }}
        <input class="btn btn-lg btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">
    </form>
</div>

<!-- image name no input -->
<br>

<div class="control-label">Thumbnail:</div>
<!-- image thumbnail -->
<div>

    <img src="{{ $marketingImage->showImage($marketingImage, $thumbnailPath) }}">

</div>

<form class="form" role="form" method="POST" action="{{ url('backend/marketing-image/' . $marketingImage->id) }}" enctype="multipart/form-data">

    <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

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
    <!-- image file Form Input -->

    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">

     <label class="control-label">Book Name</label>
     <input type="text" class="form-control"
     name="book_name" value="{{$marketingImage->book_name}}">

     @if ($errors->has('book_name'))
     <span class="help-block">
        <strong>{{ $errors->first('book_name') }}</strong>
    </span>
    @endif
    <label class="control-label">Author</label>
    <input type="text" class="form-control" name="author" value="{{$marketingImage->author}}">

    @if ($errors->has('author'))
    <span class="help-block">
        <strong>{{ $errors->first('author') }}</strong>
    </span>
    @endif

    <label class="control-label">Book Description</label>
    <textarea name="book_description" id="summernote" cols="30" rows="10">{!! $marketingImage->book_description !!}</textarea>


    @if ($errors->has('book_description'))
    <span class="help-block">
        <strong>{{ $errors->first('book_description') }}</strong>
    </span>
    @endif
    <label class="control-label">Book Review</label>
    <textarea name="book_review" id="summernote2" cols="30" rows="10">{!! $marketingImage->book_review !!}</textarea>

    @if ($errors->has('book_review'))
    <span class="help-block">
        <strong>{{ $errors->first('book_review') }}</strong>
    </span>
    @endif
    <label class="control-label">Library Name</label>
    <input type="text" class="form-control" name="library_name" value="{{$marketingImage->library_name}}">

    @if ($errors->has('library_name'))
    <span class="help-block">
        <strong>{{ $errors->first('library_name') }}</strong>
    </span>
    @endif
    <label class="control-label">Library Address</label>
    <textarea class="form-control" rows="5" name="library_address">{!! $marketingImage->library_address !!}</textarea> 

    @if ($errors->has('library_address'))
    <span class="help-block">
        <strong>{{ $errors->first('library_address') }}</strong>
    </span>
    @endif
    <label class="control-label">Library Contact</label>
    <input type="text" class="form-control" name="library_contact" value="{{$marketingImage->library_contact}}">

    @if ($errors->has('library_contact'))
    <span class="help-block">
        <strong>{{ $errors->first('library_contact') }}</strong>
    </span>
    @endif
    <!-- Submit Button -->
    <br>
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