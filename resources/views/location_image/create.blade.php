@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">




        <div class="col-md-12">




            <ol class='breadcrumb'>
                <li><a href='/'>Home</a></li>
                <li><a href='{{url("backend/location_image")}}'>Books</a></li>
                <li class='active'>Create</li>
            </ol>

            <h2>Create a New Book</h2>

            <hr/>
            
            <form class="form" id="form" role="form" method="POST" action="{{ url('backend/location_image/') }}" enctype="multipart/form-data">

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
                <div class="form-group{{ $errors->has('library_name') ? ' has-error' : '' }}">
                    <label class="control-label">Library Name</label>
                    <input type="text" class="form-control" name="library_name" value="{{ old('library_name') }}">

                    @if ($errors->has('location _name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_name') }}</strong>
                    </span>
                    @endif

                </div>
                
                <div class="form-group{{ $errors->has('library_address') ? ' has-error' : '' }}">
                    <label class="control-label">Library Address</label>
                    <input type="text" class="form-control" name="library_address" value="{{ old('library_address') }}">

                    @if ($errors->has('library_address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_address') }}</strong>
                    </span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('library_town') ? ' has-error' : '' }}">
                    <label class="control-label">Library Town</label>
                    <input type="text" class="form-control" name="library_town" value="{{ old('library_town') }}">


                    @if ($errors->has('library_town'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_town') }}</strong>
                    </span>
                    @endif

                </div>


                <div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
                    <label class="control-label">Contact Name</label>
                    <textarea name="contact_name" id="summernote2" cols="30" rows="10" value="{{ old('contact_name') }}"></textarea>

                    @if ($errors->has('contact_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('contact_name') }}</strong>
                    </span>
                    @endif

                </div>




                <div class="form-group{{ $errors->has('contact_no') ? ' has-error' : '' }}">


                    <label class="control-label">Contact Ph No</label>
                    <input type="text" class="form-control" name="contact_no" value="{{ old('contact_no') }}">

                    @if ($errors->has('contact_no'))
                    <span class="help-block">
                        <strong>{{ $errors->first('contact_no') }}</strong>
                    </span>
                    @endif
                </div>


                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                    <label class="control-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">


                    <label class="control-label">Facebook Link</label>
                    <input type="text" class="form-control" name="facebook" value="{{ old('facebook') }}">

                    @if ($errors->has('facebook'))
                    <span class="help-block">
                        <strong>{{ $errors->first('facebook') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('library_location') ? ' has-error' : '' }}">

                    <label class="control-label">Library Location</label>
                    <input type="text" class="form-control" name="library_location" value="{{ old('library_location') }}">

                    @if ($errors->has('library_location'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_location') }}</strong>
                    </span>
                    @endif
                </div>
                
                <div class="form-group{{ $errors->has('library_description') ? ' has-error' : '' }}">


                    <label class="control-label">Library Description</label>
                    <input type="text" class="form-control" name="library_description" value="{{ old('library_description') }}">

                    @if ($errors->has('library_description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('library_description') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('services') ? ' has-error' : '' }}">


                    <label class="control-label">Library Services</label>
                    <input type="text" class="form-control" name="services" value="{{ old('services') }}">

                    @if ($errors->has('services'))
                    <span class="help-block">
                        <strong>{{ $errors->first('services') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="state" class="control-label">State</label>
                    <select class="form-control" id="state" name="state[]">
                        @foreach ($states as $state)
                        <option value="{{$state->id}}">{{$state->name}}</option>
                        @endforeach 
                    </select>
                    {{-- <label class="control-label">state</label>
                    <input type="text" class="form-control" name="city" value="{{ old('city') }}"> --}}
                </div>
               {{--  <div class="form-group">
                    <label for="city" class="control-label">City</label>
                    <select class="form-control" id="city">
                        @foreach ($cities as $state)
                        <option value="{{ url('selected/'.state->id) }}">{{$state->name}}</option>
                        @endforeach
                    </select>
                </div> --}}
                   {{--  <div class="form-group">
                        <label for="city" class="control-label">City</label>
                        <select class="form-control" id="city">
                            @foreach ($cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">


                        <label class="control-label">Date</label>
                        <div>

                            {{ Form::date('date', \Carbon\Carbon::today())}} 

                        </div>

                        @if ($errors->has('date'))
                        <span class="help-block">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                        @endif
                    </div>



                    {{--   <!-- is_active Form Input -->
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
                                </div> --}}
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