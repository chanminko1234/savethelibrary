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
                <td>Library Name</td>
            </tr>
            <tr>
                <td>
                    {{$locationImage->library_name}}
                </td>
            </tr>
            <tr>
                <td>Library Address</td>
            </tr>
            <tr>
                <td>
                    {{$locationImage->library_address}}
                </td>
            </tr>
            <tr>
                <td>Library Town</td>
            </tr>
            <tr>
                <td>
                    {!!  $locationImage->library_town  !!}
                </td>
            </tr>
            <tr>
                <td>ContactName</td>
            </tr>
            <tr>
                <td>{!! $locationImage->contact_name !!} </td>
            </tr>
            <tr>
                <td>Phone No</td>
            </tr>

            <tr>
                <td>{!! $locationImage->contact_no !!} </td>
            </tr>
            <tr>
                <td>Email</td>
            </tr>
            <tr>
                <td>{!! $locationImage->email !!} </td>
            </tr>
            <tr>
            <td>Facebook Link</td>
           </tr>
           <tr>
               <td>{!! $locationImage->facebook !!}</td>
           </tr>
           <tr>
               <td>Library Location</td>
           </tr>
           <tr>
               <td>{!! $locationImage->library_location !!}</td>
           </tr>
           <tr>
               <td>Date</td>
           </tr>
           <tr>
               <td>{!! $locationImage->date !!}</td>
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