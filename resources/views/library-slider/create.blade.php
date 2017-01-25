@extends('layout.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2>Create a New Book</h2>

            <hr/>

            <form class="form" role="form" method="POST" action="{{ url('backend/library-slider') }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                <!-- name Form Input -->
                <div class="form-group{{ $errors->has('library_name') ? ' has-error' : '' }}">
                    <label class="control-label">Library Name</label>
                    <input type="text" class="form-control"
                    name="library_name" value="{{ old('library_name') }}">

                    @if ($errors->has('library_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_name') }}</strong>
                    </span>
                    @endif

                </div>





                <div class="form-group{{ $errors->has('library_description') ? ' has-error' : '' }}">
                    <label class="control-label">Library Description</label>
                    <textarea name="library_description" id="summernote" cols="30" rows="10" value="{{ old('library_description') }}"></textarea>


                    @if ($errors->has('library_description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_description') }}</strong>
                    </span>
                    @endif

                </div>


                <div class="form-group{{ $errors->has('library_address') ? ' has-error' : '' }}">
                    <label class="control-label">Library Address</label>
                    <textarea name="library_address" id="summernote2" cols="20" rows="10" value="{{ old('library_address') }}"></textarea>


                    @if ($errors->has('library_address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_address') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="form-group{{ $errors->has('library_contact') ? ' has-error' : '' }}">
                    <label class="control-label">Library Contact</label>
                    <textarea name="library_contact" id="summernote3" cols="20" rows="10" value="{{ old('library_contact') }}"></textarea>
                    @if ($errors->has('library_contact'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_contact') }}</strong>
                    </span>
                    @endif
                </div>


                <!-- image file Form Input -->

                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label class="control-label">Library Image
                    </label>

                    <input type="file" name="image" id="image">

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