@extends('layout.app')


@section('content')

<div class="container">

    <ol class='breadcrumb'>
        <li><a href='/'>Home</a></li>
        <li><a href='{{url("backend/marketing-image")}}'>Books</a></li>
        <li><a href='{{url("backend/marketing-image/".$marketingImage->id)}}'>{{ $marketingImage->image_name }}</a></li>
        <li class='active'>Edit</li>
    </ol>

    <h2>Update Book</h2>

    <hr/>

    <!-- delete button -->

    <div class="form-group pull-right">

        <form class="form" role="form" method="POST" action="{{ url('backend/marketing-image/'. $marketingImage->id) }}">
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

     <h4>{{ $marketingImage->image_name
         . '.' .
         $marketingImage->image_extension }}
     </h4>

 </div>
 <br>

 <div class="control-label">Thumbnail:</div>
 <!-- image thumbnail -->
 <div>

    <img src="{{ $marketingImage->showImage($marketingImage, $thumbnailPath) }}">

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

<form class="form" role="form" method="POST" action="{{ url('backend/marketing-image/' . $marketingImage->id) }}" enctype="multipart/form-data">

    <input type="hidden" name="_method" value="patch">

    {{ csrf_field() }}

    <!-- is_active Form Input -->

    <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }}">

        <label class="control-label">Is Active</label>


        <select class="form-control" id="is_active" name="is_active">
            <option value="{{$marketingImage->is_active}}">
                {{ $marketingImage->is_active == 1 ? 'Yes' :'No' }}</option>
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
                <option value="{{$marketingImage->is_featured}}">
                    {{ $marketingImage->is_featured == 1 ? 'Yes' :'No' }}</option>
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

             <label class="control-label">Book Name</label>
             <input type="text" class="form-control"
             name="book_name" value="{{$marketingImage->book_name}}">

             @if ($errors->has('book_name'))
             <span class="help-block">
                <strong>{{ $errors->first('book_name') }}</strong>
            </span>
            @endif

            <br>

            <label class="control-label">Author</label>
            <input type="text" class="form-control" name="author" value="{{$marketingImage->author}}">

            @if ($errors->has('author'))
            <span class="help-block">
                <strong>{{ $errors->first('author') }}</strong>
            </span>
            @endif

            <br>


            <label class="control-label">Book Description</label>
            <textarea name="book_description" id="summernote" cols="30" rows="10">{!! $marketingImage->book_description !!}</textarea>


            @if ($errors->has('book_description'))
            <span class="help-block">
                <strong>{{ $errors->first('book_description') }}</strong>
            </span>
            @endif

            <br>


            <label class="control-label">Book Review</label>
            <textarea name="book_review" id="summernote2" cols="30" rows="10">{!! $marketingImage->book_review !!}</textarea>

            @if ($errors->has('book_review'))
            <span class="help-block">
                <strong>{{ $errors->first('book_review') }}</strong>
            </span>
            @endif
            <br>

            <label class="control-label">Library Name</label>
            <input type="text" class="form-control" name="library_name" value="{{$marketingImage->library_name}}">

            @if ($errors->has('library_name'))
            <span class="help-block">
                <strong>{{ $errors->first('library_name') }}</strong>
            </span>
            @endif


            <br>
            <br>


            <label class="control-label">Library Address</label>
            <textarea class="form-control" rows="5" name="library_address">{!! $marketingImage->library_address !!}</textarea> 

            @if ($errors->has('library_address'))
            <span class="help-block">
                <strong>{{ $errors->first('library_address') }}</strong>
            </span>
            @endif

            <br>
            <br>





            <label class="control-label">Library Contact</label>
            <input type="text" class="form-control" name="library_contact" value="{{$marketingImage->library_contact}}">

            @if ($errors->has('library_contact'))
            <span class="help-block">
                <strong>{{ $errors->first('library_contact') }}</strong>
            </span>
            @endif

            <br>
            <br>


            <label class="control-label">Book Review Category</label>
            <select class="form-control" id="is_featured" name="category" value="{{ old('category') }}">
                <option value="{{old('is_featured')}}">
                    {{ ! is_null(old('is_featured')) ?
                    (old('is_featured') == 1 ? 'Yes' :'No')
                    : 'Please Choose One'}}</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>

                @if ($errors->has('category'))
                <span class="help-block">
                    <strong>{{ $errors->first('category') }}</strong>
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