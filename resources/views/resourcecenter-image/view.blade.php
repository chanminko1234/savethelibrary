@extends('layout.app')

@section('content')
<div class="container">
    <div class="col-md-12">

        <h1>{{ $resourcecenterImage->image_name }} Resource Center Image</h1>

        <div class="pull-left">


            <a href="{{ url('backend/resourcecenter-image/' . $resourcecenterImage->id . '/edit')}}">

                <button type="button" class="btn btn-primary btn-lg">Edit Image</button></a>

            </div>
            <br><br>

            <hr/>

            <div class="panel panel-default">

                <!-- Table -->
                <table class="table table-striped">

                    <tr>

                        <th>Thumbnail</th>

                    </tr>

                    <tr>

                        <td>

                            <img src="{{ $resourcecenterImage->showImage($resourcecenterImage, $thumbnailPath) }}">

                        </td>

                    </tr>


                    <tr>

                        <th>Primary Image</th>

                    </tr>

                    <tr>

                        <td>

                            <img src="{{ $resourcecenterImage->showImage($resourcecenterImage, $imagePath) }}" style="max-width: 600px;">

                        </td>
                    </tr>

                    <tr>
                        <td>

                            <div class="form-group pull-left">

                                <form class="form" role="form" method="POST" action="{{ url('backend/resourcecenter-image/'. $resourcecenterImage->id) }}">
                                    <input type="hidden" name="_method" value="delete">
                                    {{ csrf_field() }}

                                    <input class="btn btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete">

                                </form>
                            </div>

                        </td>

                    </tr>

                </table>

            </div>

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