@extends('layout.app')


@section('content')

<div class="container">

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='{{url("backend/location_image")}}'>Loction</a></li>
        <li><a href='{{url("backend/location_image/".$locationImage->id)}}'>{{ $locationImage->location_name }}</a></li>
        <li class='active'>Edit</li>
    </ol>

    <h2>Update Location</h2>

    <hr/>

    <!-- delete button -->

    <div class="form-group pull-right">

        <form class="form" role="form" method="POST" action="{{ url('backend/location_image/'. $locationImage->id) }}">
            <input type="hidden" name="_method" value="delete">
            {{ csrf_field() }}

            <input class="btn btn-lg btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">


        </div>
            </form>
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
    

<form class="form" role="form" method="POST" action="{{ url('backend/location_image/' . $locationImage->id) }}" enctype="multipart/form-data">

    <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- is_active Form Input -->
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

    <!-- name Form Input -->
    <div class="form-group{{ $errors->has('library_name') ? ' has-error' : '' }}">
        <label class="control-label">Library Name</label>
        <input type="text" class="form-control" name="library_name" value="{{ $locationImage->library_name }}">

        @if ($errors->has('library_name'))
        <span class="help-block">
            <strong>{{ $errors->first('library_name') }}</strong>
        </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('library_address') ? ' has-error' : '' }}">
        <label class="control-label">Library Address</label>
        <input type="text" class="form-control" name="library_address" value="{{ $locationImage->library_address }}">

        @if ($errors->has('library_address'))
        <span class="help-block">
            <strong>{{ $errors->first('library_address') }}</strong>
        </span>
        @endif

    </div>

    <div class="form-group{{ $errors->has('library_town') ? ' has-error' : '' }}">
        <label class="control-label">Library Town</label>
        <input type="text" class="form-control" name="library_town" value="{{ $locationImage->library_town }}">


        @if ($errors->has('library_town'))
        <span class="help-block">
            <strong>{{ $errors->first('library_town') }}</strong>
        </span>
        @endif

    </div>


    <div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
        <label class="control-label">Contact Name</label>
        <textarea name="contact_name" id="summernote2" cols="30" rows="10">{!! $locationImage->contact_name !!}</textarea>

        @if ($errors->has('contact_name'))
        <span class="help-block">
            <strong>{{ $errors->first('contact_name') }}</strong>
        </span>
        @endif

    </div>




    <div class="form-group{{ $errors->has('contact_no') ? ' has-error' : '' }}">


        <label class="control-label">Contact Ph No</label>
        <input type="text" class="form-control" name="contact_no" value="{{  $locationImage->contact_no }}">

        @if ($errors->has('contact_no'))
        <span class="help-block">
            <strong>{{ $errors->first('contact_no') }}</strong>
        </span>
        @endif
    </div>


    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


        <label class="control-label">Email</label>
        <input type="text" class="form-control" name="email" value="{{  $locationImage->email }}">

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">


        <label class="control-label">Facebook Link</label>
        <input type="text" class="form-control" name="facebook" value="{{  $locationImage->facebook }}">

        @if ($errors->has('facebook'))
        <span class="help-block">
            <strong>{{ $errors->first('facebook') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('library_location') ? ' has-error' : '' }}">


        <label class="control-label">Library Location</label>
        <input type="text" class="form-control" name="library_location" value="{{  $locationImage->library_location }}">

        @if ($errors->has('library_location'))
        <span class="help-block">
            <strong>{{ $errors->first('library_location') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('library_description') ? ' has-error' : '' }}">


        <label class="control-label">Library Description</label>
        <input type="text" class="form-control" name="library_description" value="{{  $locationImage->library_description }}">

        @if ($errors->has('library_description'))
        <span class="help-block">
            <strong>{{ $errors->first('library_description') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('services') ? ' has-error' : '' }}">


        <label class="control-label">Library Services</label>
        <input type="text" class="form-control" name="services" value="{{  $locationImage->services }}">

        @if ($errors->has('services'))
        <span class="help-block">
            <strong>{{ $errors->first('services') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">


        <label class="control-label">City</label>
        <input type="text" class="form-control" name="city" value="{{  $locationImage->city }}">

        @if ($errors->has('city'))
        <span class="help-block">
            <strong>{{ $errors->first('city') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">


        <label class="control-label">Date</label>
        <input type="text" class="form-control" name="date" value="{{  $locationImage->date }}">

        @if ($errors->has('date'))
        <span class="help-block">
            <strong>{{ $errors->first('date') }}</strong>
        </span>
        @endif
        <br>
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