@extends("layout.app")

@section("content")
<section class="content-header">
  <h1>
    Resource Category
    <small>Detail</small>
</h1>
</section>

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="row">

                    <div class="col-md-12">
                        <form action="{{ url('backend/resourcecategory') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label" for="category_name">Resource Category</label>
                                <br>
                                <p>{{ $resourcecategory->category_name }}</p>
                            </div>
                            
                        </div>                           
                    </form>
                </div>                    
            </div>
        </div>            
    </div>        
</div>    
</div>
@endsection