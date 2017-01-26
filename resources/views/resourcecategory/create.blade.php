@extends("layout.app")

@section("content")
<section class="content-header">
  <h1>
    Resource Category
    <small>create</small>
</h1>
</section>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('backend/resourcecategory') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label" for="category_name">Resource Category</label>
                                <br>
                                @if($errors->has('category_name'))
                                <label class="text-danger" for="category_name"><small>{{ $errors->first('category_name') }}</small></label>
                                @endif
                                <input class="form-control" type="text" name="category_name" value="{{ old('category_name') }}" />
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>                    
                </div>
            </div>            
        </div>        
    </div>    
</div>
@endsection