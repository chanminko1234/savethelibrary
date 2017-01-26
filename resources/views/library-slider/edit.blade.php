@extends('layout.app')


@section('content')

<div class="container">
    <h2>Update Library Images</h2>

    <hr/>

    <!-- delete button -->

    <div class="form-group pull-right">

        <form class="form" role="form" method="POST" action="{{ url('backend/library-slider/'. $LibrySliderImage->id) }}">
            <input type="hidden" name="_method" value="delete">
            {{ csrf_field() }}

            <input class="btn btn-lg btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

        </form>
    </div>
    <div class="control-label">Thumbnail:</div>
    <!-- image thumbnail -->
    <div>

        <img src="{{ $LibrySliderImage->showImage($LibrySliderImage, $thumbnailPath) }}">

    </div>
    @if ($errors->has('image'))

    <span class="help-block">
        <strong>{{ $errors->first('image') }}</strong>
    </span>

    @endif
    <form class="form" role="form" method="POST" action="{{ url('backend/library-slider/' . $LibrySliderImage->id) }}" enctype="multipart/form-data">

        <input type="hidden" name="_method" value="patch">

        {{ csrf_field() }}

        <div class="form-group">
            <label class="control-label">Library Image
            </label>
            <input type="file" name="image" id="image">
        </div>
        <!-- image file Form Input -->

        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
           <label class="control-label">Library Name</label>
           <input type="text" class="form-control"
           name="library_name" value="{{$LibrySliderImage->library_name}}">

           @if ($errors->has('library_name'))
           <span class="help-block">
            <strong>{{ $errors->first('library_name') }}</strong>
        </span>
        @endif

        <label class="control-label">Library Description</label>
        <textarea name="library_description" id="summernote" cols="30" rows="10">{!! $LibrySliderImage->library_description !!}</textarea>
        @if ($errors->has('library_description'))
        <span class="help-block">
            <strong>{{ $errors->first('library_description') }}</strong>
        </span>
        @endif

        <label class="control-label">Library Address</label>
        <textarea name="library_address" id="summernote2" cols="30" rows="10">{!! $LibrySliderImage->library_address !!}</textarea>
        @if ($errors->has('library_address'))
        <span class="help-block">
            <strong>{{ $errors->first('library_address') }}</strong>
        </span>
        @endif

        <label class="control-label">Library Contact</label>
        <textarea name="library_contact" id="summernote3" cols="30" rows="10">{!! $LibrySliderImage->library_contact !!}</textarea>
        @if ($errors->has('library_contact'))
        <span class="help-block">
            <strong>{{ $errors->first('library_contact') }}</strong>
        </span>
        @endif

        
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