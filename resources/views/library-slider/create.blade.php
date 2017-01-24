


@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">




        <div class="col-md-12">




            <ol class='breadcrumb'>
                <li><a href='/'>Home</a></li>
                <li><a href='{{url("backend/library-slider")}}'>Library Sliders</a></li>
                <li class='active'>Create</li>
            </ol>

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


                <br>
                <br>

                <div class="form-group{{ $errors->has('library_contact') ? ' has-error' : '' }}">
                    <label class="control-label">Library Contact</label>
                    <textarea name="library_contact" id="summernote3" cols="20" rows="10" value="{{ old('library_contact') }}"></textarea>


                    


                    @if ($errors->has('library_contact'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_contact') }}</strong>
                    </span>
                    @endif
                </div>


                <br>
                <br>






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

                <!-- image file Form Input -->

                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                <label class="control-label">Library Image
                    </label>

                    <input type="file" name="image" id="image">
               
                @if ($errors->has('library_image'))
                <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
                @endif
            </div>


            <!-- is_active Form Input -->

            <div class="form-group{{ $errors->has('is_active') ?
                ' has-error' : '' }}">
                <label class="control-label">Is Active</label>
                <select class="form-control" id="is_active" name="is_active">
                    <option value="{{old('is_active')}}">
                        {{ ! is_null(old('is_active')) ?
                        (old('is_active') == 1 ? 'Yes' :'No')
                        : 'Please Choose One'}}</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                    @if ($errors->has('is_active'))
                    <span class="help-block">
                        <strong>{{ $errors->first('is_active') }}</strong>
                    </span>
                    @endif
                </div>


                <!-- is_featured Form Input -->
                <div class="form-group{{ $errors->has('is_featured') ?
                    ' has-error' : '' }}">
                    <label class="control-label">Is Featured</label>
                    <select class="form-control" id="is_featured" name="is_featured">
                        <option value="{{old('is_featured')}}">
                            {{ ! is_null(old('is_featured')) ?
                            (old('is_featured') == 1 ? 'Yes' :'No')
                            : 'Please Choose One'}}</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                        @if ($errors->has('is_featured'))
                        <span class="help-block">
                            <strong>{{ $errors->first('is_featured') }}</strong>
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