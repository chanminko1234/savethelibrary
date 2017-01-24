@extends('layout.app')


@section('content')

<div class="container">

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='{{url("backend/library-slider")}}'>Library Slider Images</a></li>
        <li><a href='{{url("backend/library-slider/".$LibrySliderImage->id)}}'>{{ $LibrySliderImage->image_name }}</a></li>
        <li class='active'>Edit</li>
    </ol>

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

    <!-- image name no input -->
    <div>

        <div class="control-label">
         Image Name:

     </div>

     <h4>{{ $LibrySliderImage->image_name
         . '.' .
         $LibrySliderImage->image_extension }}
     </h4>

 </div>
 <br>

 <div class="control-label">Thumbnail:</div>
 <!-- image thumbnail -->
 <div>

    <img src="{{ $LibrySliderImage->showImage($LibrySliderImage, $thumbnailPath) }}">

</div>

<br>
<div class="form-group">
    <label class="control-label">Library Image
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

<form class="form" role="form" method="POST" action="{{ url('backend/library-slider/' . $LibrySliderImage->id) }}" enctype="multipart/form-data">

    <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- is_active Form Input -->

    <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">

        <label class="control-label">Is Active</label>


        <select class="form-control" id="is_active" name="is_active">
            <option value="{{$LibrySliderImage->is_active}}">
                {{ $LibrySliderImage->is_active == 1 ? 'Yes' :'No' }}</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>


            @if ($errors->has('is_active'))

            <span class="help-block">
                <strong>{{ $errors->first('is_active') }}</strong>
            </span>

            @endif

        </div>
        <br>

        <!-- is_featured Form Input -->

        <div class="form-group{{ $errors->has('is_featured') ? ' has-error' : '' }}">

            <label class="control-label">Is Featured</label>


            <select class="form-control" id="is_featured" name="is_featured">
                <option value="{{$LibrySliderImage->is_featured}}">
                    {{ $LibrySliderImage->is_featured == 1 ? 'Yes' :'No' }}</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>


                @if ($errors->has('is_featured'))

                <span class="help-block">
                    <strong>{{ $errors->first('is_featured') }}</strong>
                </span>

                @endif

            </div>

            <br>


            <!-- image file Form Input -->

            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">




             <br>

             <label class="control-label">Library Name</label>
             <input type="text" class="form-control"
             name="library_name" value="{{$LibrySliderImage->library_name}}">

             @if ($errors->has('library_name'))
             <span class="help-block">
                <strong>{{ $errors->first('library_name') }}</strong>
            </span>
            @endif

            <br>

            <label class="control-label">Library Description</label>
            <textarea name="library_description" id="summernote" cols="30" rows="10">{!! $LibrySliderImage->library_description !!}</textarea>


            @if ($errors->has('library_description'))
            <span class="help-block">
                <strong>{{ $errors->first('library_description') }}</strong>
            </span>
            @endif

            <br>


            <label class="control-label">Library Address</label>
            <textarea name="library_address" id="summernote2" cols="30" rows="10">{!! $LibrySliderImage->library_address !!}</textarea>

            @if ($errors->has('library_address'))
            <span class="help-block">
                <strong>{{ $errors->first('library_address') }}</strong>
            </span>
            @endif
            <br>

            


            <label class="control-label">Library Contact</label>
            <textarea class="form-control" rows="5" name="library_contact">{!! $LibrySliderImage->library_contact !!}</textarea> 

            @if ($errors->has('library_contact'))
            <span class="help-block">
                <strong>{{ $errors->first('library_contact') }}</strong>
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