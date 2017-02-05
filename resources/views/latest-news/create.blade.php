@extends('layout.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2>Create News</h2>

            <hr/>

            <form class="form" role="form" method="POST" action="{{ url('backend/latest-news') }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                <!--News Title Form Input -->
                <div class="form-group{{ $errors->has('news_title') ? ' has-error' : '' }}">
                    <label class="control-label">News Title</label>
                    <input type="text" class="form-control"
                    name="news_title" value="{{ old('news_title') }}">

                    @if ($errors->has('news_title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('news_title') }}</strong>
                    </span>
                    @endif

                </div>
                <!--News Description Form Input -->
                <div class="form-group {{ $errors->has('news_description') ? ' has-error' : '' }}">
                    <label class="control-label">News Description</label>
                    <textarea name="news_description" id="summernote" class="form-control" >{{old('news_description')}}</textarea>
                    @if ($errors->has('news_description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('news_description') }}</strong>
                    </span>
                    @endif
                </div>
                <!-- date Form Input -->

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




                <!-- time Form Input -->

                <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">

                    <label class="control-label">Time</label>

                    <input type="text" class="form-control" name="time" value="{{ old('time') }}">

                    @if ($errors->has('time'))

                    <span class="help-block">
                        <strong>{{ $errors->first('time') }}</strong>
                    </span>

                    @endif

                </div>

                <!-- Location Form Input -->
                
                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">

                    <label class="control-label">Location</label>

                    <input type="text" class="form-control" name="location" value="{{ old('location') }}">

                    @if ($errors->has('location'))

                    <span class="help-block">
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>

                    @endif

                </div>

                <!-- Contact Form Input -->
                
                <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">

                    <label class="control-label">Contact</label>

                    <input type="text" class="form-control" name="contact" value="{{ old('contact') }}">

                    @if ($errors->has('contact'))

                    <span class="help-block">
                        <strong>{{ $errors->first('contact') }}</strong>
                    </span>

                    @endif

                </div>


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




                <!-- Image File Input -->
                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label class="control-label">News Image
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