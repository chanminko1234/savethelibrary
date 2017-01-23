@extends('layout.app')

@section('content')
<div class="container">

<ol class='breadcrumb'>
    <li><a href='/'>Home</a></li>
    <li><a href='{{url("backend/marketing-image")}}'>Books</a></li>
    <li><a href='{{url("backend/marketing-image/". $marketingImage->id)}}'>{{ $marketingImage->image_name }}</a></li>
</ol>

<h1>{{ $marketingImage->image_name }} Book</h1>
<div class="row">
<div class="pull-left col-md-2">


    <a href="{{url('backend/marketing-image/'.$marketingImage->id.'/edit')}}">

        <button type="button" class="btn btn-primary btn-lg">Edit Book</button></a>

    </div>
  

    <div class="form-group col-md-2">

        <form class="form" role="form" method="POST" action="{{ url('backend/marketing-image/'. $marketingImage->id) }}">
            <input type="hidden" name="_method" value="delete">
            {{ csrf_field() }}

            <input class="btn btn-lg btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete Book">

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

                    <img src="{{ $marketingImage->showImage($marketingImage, $thumbnailPath) }}">

                </td>

            </tr>

            <tr>

                <th>Active?</th>

            </tr>

            <tr>

                <td>{{ $marketingImage->showActiveStatus($marketingImage->is_active) }}</td>

            </tr>

            <tr>

                <th>Featured?</th>

            </tr>

            <tr>

                <td>{{ $marketingImage->showFeaturedStatus($marketingImage->is_featured) }}</td>

            </tr>

            <tr>

                <th>Primary Image</th>

            </tr>

            <tr>

                <td>

                    <img src="{{ $marketingImage->showImage($marketingImage, $imagePath) }}" style="max-width: 600px;">

                </td>
            </tr>
            <tr>

                <th>Book Name</th>

            </tr>


            <tr>
                <td>
                    {{$marketingImage->book_name}}
                </td>
            </tr>

            <tr>

                <th>Author</th>

            </tr>

            <tr>
                <td>
                    {{$marketingImage->author}}
                </td>
            </tr>

            <tr>

                <th>Book Description</th>

            </tr>


            <tr>
                <td>
                 {{ $marketingImage->book_description }}
             </td>
         </tr>

         <tr>

            <th>Book Review</th>

        </tr>


        <tr>
            <td>
               {{ $marketingImage->book_review }}
           </td>
       </tr>

       <tr>

        <th>Library Name</th>

    </tr>


    <tr>
        <td>
         {{$marketingImage->library_name}}
     </td>
 </tr>

 <tr>

    <th>Library Address</th>

</tr>


<tr>
    <td>
     {{ $marketingImage->library_address}}
 </td>
</tr>

<tr>

    <th>Library Contact</th>

</tr>


<tr>
    <td>
     {{$marketingImage->library_contact}}
 </td>
</tr>

<tr>
    <td>



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