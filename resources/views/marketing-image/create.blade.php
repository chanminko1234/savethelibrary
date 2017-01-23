@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">




        <div class="col-md-12">




            <ol class='breadcrumb'>
                <li><a href='/'>Home</a></li>
                <li><a href='{{url("backend/marketing-image")}}'>Books</a></li>
                <li class='active'>Create</li>
            </ol>

            <h2>Create a New Book</h2>

            <hr/>
            
            <form class="form" role="form" method="POST" action="{{ url('backend/marketing-image/') }}" enctype="multipart/form-data">

                {{ csrf_field() }}
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

                <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
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

                    </div>


                    
                    


                        <!--    <label class="control-label">Download Link</label>
                            <input type="text" class="form-control" name="download_link">

                            @if ($errors->has('download_link'))
                            <span class="help-block">
                                <strong>{{ $errors->first('download_link') }}</strong>
                            </span>
                            @endif

                            <br>
                            <br> -->


                        <!--    <label class="control-label">Book Image
                            </label>
                            <input type="file" name="image" id="image" value="{{ old('image') }}">

                            @if ($errors->has('image'))
                            <span class="help-block">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif
                        -->




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