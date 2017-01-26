@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="pull-left col-md-2">
            <br>
            <a href="{{url('backend/location_image/'.$locationImage->id.'/edit')}}">
                <button type="button" class="btn btn-primary btn-lg">Edit Location</button></a>
            </div>
            <div class="form-group col-md-2">
                <br>
                <form class="form" role="form" method="POST" action="{{ url('backend/location_image/'. $locationImage->id) }}">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}

                    <input class="btn btn-lg btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete Location">

                </form>
            </div>
        </div>
        <div class="panel panel-default">
            <!-- Table -->
            <table class="table table-striped showtable table-responsive">
                <tr>
                    <td>Thumbnail</td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ $locationImage->showImage($locationImage, $thumbnailPath) }}">
                    </td>
                </tr>
                <tr>
                    <td>Primary Image</td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ $locationImage->showImage($locationImage, $imagePath) }}" style="max-width: 600px;">
                    </td>
                </tr>
                <tr>
                    <td>Location  Name</td>
                </tr>
                <tr>
                    <td>
                        {{$locationImage->location_name}}
                    </td>
                </tr>
                <tr>
                    <td>Location Description</td>
                </tr>
                <tr>
                    <td>
                        {{$locationImage->location_desc}}
                    </td>
                </tr>
                <tr>
                    <td>Location Review</td>
                </tr>
                <tr>
                    <td>
                        {!!  $locationImage->location_review  !!}
                    </td>
                </tr>
                
</table>
</div>
<div class="container">
</div>
</div>
@endsection
@section('scripts')
<script>
    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }
</script>


@endsection