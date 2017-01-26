@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2>Create a New Book</h2>

            <hr/>
            
            <form class="form" role="form" method="POST" action="{{ url('backend/location_image/') }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                <!-- image_name Form Input -->

                <div class="form-group{{ $errors->has('image_name') ? ' has-error' : '' }}">

                    <label class="control-label">Image Name</label>

                    <input type="text" class="form-control" name="image_name" value="{{ old('image_name') }}">

                    @if ($errors->has('image_name'))

                    <span class="help-block">
                        <strong>{{ $errors->first('image_name') }}</strong>
                    </span>

                    @endif

                </div>
                <!-- name Form Input -->
                <div class="form-group{{ $errors->has('location_name') ? ' has-error' : '' }}">
                    <label class="control-label">Location Name</label>
                    <input type="text" class="form-control" name="location_name" value="{{ old('location_name') }}">

                    @if ($errors->has('location _name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('location_name') }}</strong>
                    </span>
                    @endif

                </div>
                
                <div class="form-group{{ $errors->has('location_desc') ? ' has-error' : '' }}">
                    <label class="control-label">Location Description</label>
                    <input type="text" class="form-control" name="location_desc" value="{{ old('location_desc') }}">

                    @if ($errors->has('location_desc'))
                    <span class="help-block">
                        <strong>{{ $errors->first('location_desc') }}</strong>
                    </span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('location_address') ? ' has-error' : '' }}">
                    <label class="control-label">Location Address</label>
                    <textarea name="location_address" id="summernote" cols="30" rows="10" value="{{ old('location_address') }}"></textarea>


                    @if ($errors->has('location_address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('location_address') }}</strong>
                    </span>
                    @endif

                </div>


                <div class="form-group{{ $errors->has('location_content') ? ' has-error' : '' }}">
                    <label class="control-label">Location Content</label>
                    <textarea name="location_content" id="summernote2" cols="30" rows="10" value="{{ old('location_content') }}"></textarea>

                    @if ($errors->has('location_content'))
                    <span class="help-block">
                        <strong>{{ $errors->first('location_content') }}</strong>
                    </span>
                    @endif

                </div>




                <div class="form-group{{ $errors->has('location_review') ? ' has-error' : '' }}">


                    <label class="control-label">Location Review</label>
                    <input type="text" class="form-control" name="location_review" value="{{ old('location_review') }}">

                    @if ($errors->has('location_review'))
                    <span class="help-block">
                        <strong>{{ $errors->first('location_review') }}</strong>
                    </span>
                    @endif
                </div>
                <!-- image file Form Input -->
                <div class="form-group">
                    <label class="control-label">Primary Image
                    </label>

                    <input type="file" name="image" id="image">
                </select>
                @if ($errors->has('image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
</div>

@endsection