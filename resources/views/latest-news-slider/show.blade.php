@extends('layout.app')

@section('content')
<div class="container">

    {{--<ol class='breadcrumb'>
    <li><a href='/'>Home</a></li>
    <li><a href='{{url("backend/library-slider")}}'>Library Slider Images</a></li>
    <li><a href='{{url("backend/library-slider/". $LibrySliderImage->id)}}'>{{ $LibrySliderImage->image_name }}</a></li>
</ol>--}}
<h1> Latest News</h1>
<div class="row">
    <div class="pull-left col-md-2">


        <a href="{{url('backend/latest-news-slider/'.$LatestNew->id.'/edit')}}">

            <button type="button" class="btn btn-primary btn-lg">Edit News</button></a>

        </div>


        <div class="form-group col-md-2">

            <form class="form" role="form" method="POST" action="{{ url('backend/latest-news-slider/'. $LatestNew->id) }}">
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

                    <img src="{{ $LatestNew->showImage($LatestNew, $thumbnailPath) }}">

                </td>

            </tr>
            <tr>

                <th>Primary Image</th>

            </tr>

            <tr>

                <td>

                    <img src="{{ $LatestNew->showImage($LatestNew, $imagePath) }}" style="max-width: 600px;">

                </td>
            </tr>
            <tr>

                <th>News Title</th>

            </tr>


            <tr>
                <td>
                    {{$LatestNew->news_title}}
                </td>
            </tr>

            <tr>

                <th>News Description</th>

            </tr>

            <tr>
                <td>
                    {!! $LatestNew->news_description !!}
                </td>
            </tr>

             <tr>

                <th>Location</th>

            </tr>

            <tr>
                <td>
                    {!! $LatestNew->location !!}
                </td>
            </tr>

            <tr>

                <th>Date</th>

            </tr>


            <tr>
                <td>
                 {!! $LatestNew->date !!}
             </td>
         </tr>

         <tr>

            <th>Time</th>

        </tr>


        <tr>
            <td>
             {!! $LatestNew->time !!}
         </td>
     </tr>


     <tr>

     <th>Contact</th>

    </tr>


    <tr>
        <td>
         {!! $LatestNew->contact !!}
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


