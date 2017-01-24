@extends('layout.app')


@section('content')


<ol class='breadcrumb'>
    <li><a href='/'>Home</a></li>
    <li><a href='/book'>Books</a></li>
    <li><a href='/book/{{$book->id}}'>{{$book->name}}</a></li>
    <li class='active'>Edit</li>
</ol>

<h1>Edit Book</h1>

<hr/>


<form class="form" role="form" method="POST" action="{{ url('backend/book/'. $book->id) }}">
    <input type="hidden" name="_method" value="patch">
    {{ csrf_field() }}

    <!-- widget_name Form Input -->
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="control-label">Widget Name</label>

        <input type="text" class="form-control" name="name" value="{{$book->book_name}}">

        @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif

    </div>



    

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg">
            Edit
        </button>
    </div>

</form>


@endsection