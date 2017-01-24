@extends('layout.app')

@section('content')
<div class="container">

<ol class='breadcrumb'>
    <li><a href='/'>Home</a></li>
    <li><a href='{{url("backend/library-slider")}}'>Library Slider Images</a></li>
    <li><a href='{{url("backend/library-slider/". $LibrySliderImage->id)}}'>{{ $LibrySliderImage->image_name }}</a></li>
</ol>

<h1>{{ $LibrySliderImage->image_name }} Library</h1>
<div class="row">
<div class="pull-left col-md-2">


    <a href="{{url('backend/library-slider/'.$LibrySliderImage->id.'/edit')}}">

        <button type="button" class="btn btn-primary btn-lg">Edit Library</button></a>

    </div>
  

    <div class="form-group col-md-2">

        <form class="form" role="form" method="POST" action="{{ url('backend/library-slider/'. $LibrySliderImage->id) }}">
            <input type="hidden" name="_method" value="delete">
            {{ csrf_field() }}

            <input class="btn btn-lg btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete Library">

        </form>
    </div>
    </div>

    <hr/>
    
    <div class="panel panel-default">

        <!-- Table -->
        <table class="table table-striped showtable table-responsive">

            <tr>

                <th>Thumbnail</th>

            </tr>

            <tr>

                <td>

                    <img src="{{ $LibrySliderImage->showImage($LibrySliderImage, $thumbnailPath) }}">

                </td>

            </tr>

            <tr>

                <th>Active?</th>

            </tr>

            <tr>

                <td>{{ $LibrySliderImage->showActiveStatus($LibrySliderImage->is_active) }}</td>

            </tr>

            <tr>

                <th>Featured?</th>

            </tr>

            <tr>

                <td>{{ $LibrySliderImage->showFeaturedStatus($LibrySliderImage->is_featured) }}</td>

            </tr>

            <tr>

                <th>Primary Image</th>

            </tr>

            <tr>

                <td>

                    <img src="{{ $LibrySliderImage->showImage($LibrySliderImage, $imagePath) }}" style="max-width: 600px;">

                </td>
            </tr>
            <tr>

                <th>Library Name</th>

            </tr>


            <tr>
                <td>
                    {{$LibrySliderImage->library_name}}
                </td>
            </tr>

            <tr>

                <th>Library Description</th>

            </tr>

            <tr>
                <td>
                    {!! $LibrySliderImage->library_description !!}
                </td>
            </tr>

            <tr>

                <th>Library Address</th>

            </tr>


            <tr>
                <td>
               {!! $LibrySliderImage->library_address !!}
             </td>
         </tr>

         <tr>

            <th>Library Contact</th>

        </tr>


        <tr>
            <td>
               {!! $LibrySliderImage->library_contact !!}
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