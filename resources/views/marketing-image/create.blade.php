@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-12">

            <h2>Create a New Book</h2>

            <hr/>
            
            <form class="form" role="form" method="POST" action="{{ url('backend/marketing-image/') }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                <!-- image_name Form Input -->
                <div class="form-group{{ $errors->has('image_name') ?
                    ' has-error' : '' }}">
                    <label class="control-label">Image Name</label>
                    <input type="text" class="form-control" name="image_name"
                    value="{{ old('image_name') }}">
                    @if ($errors->has('image_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('image_name') }}</strong>
                    </span>
                    @endif
                </div>
                <!-- name Form Input -->
                <div class="form-group{{ $errors->has('book_name') ? ' has-error' : '' }}">
                    <label class="control-label">Book Name</label>
                    <input type="text" class="form-control" name="book_name" value="{{ old('book_name') }}">

                    @if ($errors->has('book_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('book_name') }}</strong>
                    </span>
                    @endif

                </div>
                
                <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                    <label class="control-label">Author</label>
                    <input type="text" class="form-control" name="author" value="{{ old('author') }}">

                    @if ($errors->has('author'))
                    <span class="help-block">
                        <strong>{{ $errors->first('author') }}</strong>
                    </span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('book_description') ? ' has-error' : '' }}">
                    <label class="control-label">Book Description</label>
                    <textarea name="book_description" id="summernote" cols="30" rows="10" value="{{ old('book_description') }}"></textarea>


                    @if ($errors->has('book_description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('book_description') }}</strong>
                    </span>
                    @endif

                </div>


                <div class="form-group{{ $errors->has('book_review') ? ' has-error' : '' }}">
                    <label class="control-label">Book Review</label>
                    <textarea name="book_review" id="summernote2" cols="30" rows="10" value="{{ old('book_review') }}"></textarea>

                    @if ($errors->has('book_review'))
                    <span class="help-block">
                        <strong>{{ $errors->first('book_review') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="form-group{{ $errors->has('library_name') ? ' has-error' : '' }}">


                    <label class="control-label">Library Name</label>
                    <input type="text" class="form-control" name="library_name" value="{{ old('library_name') }}">

                    @if ($errors->has('library_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('library_address') ? ' has-error' : '' }}">
                    <label class="control-label">Library Address</label>
                    <textarea class="form-control" rows="5" name="library_address" value="{{ old('library_address') }}"></textarea> 

                    @if ($errors->has('library_address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_address') }}</strong>
                    </span>
                    @endif

                </div>
                <div class="form-group{{ $errors->has('library_contact') ? ' has-error' : '' }}">

                    <label class="control-label">Library Contact</label>
                    <input type="text" class="form-control" name="library_contact" value="{{ old('library_contact') }}">

                    @if ($errors->has('library_contact'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_contact') }}</strong>
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