@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="pull-left col-md-2">
            <br>
            <a href="{{url('backend/latest-review-slider/'.$LatestReview->id.'/edit')}}">
                <button type="button" class="btn btn-primary btn-lg">Edit Book</button></a>
            </div>
            <div class="form-group col-md-2">
                <br>
                <form class="form" role="form" method="POST" action="{{ url('backend/latest-review-slider/'. $LatestReview->id) }}">
                    <input type="hidden" name="_method" value="delete">
                    {{ csrf_field() }}

                    <input class="btn btn-lg btn-danger" Onclick="return ConfirmDelete();" type="submit" value="Delete Book">

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
                        <img src="{{ $LatestReview->showImage($LatestReview, $thumbnailPath) }}">
                    </td>
                </tr>
                <tr>
                    <td>Primary Image</td>
                </tr>
                <tr>
                    <td>
                        <img src="{{ $LatestReview->showImage($LatestReview, $imagePath) }}" style="max-width: 600px;">
                    </td>
                </tr>
                <tr>
                    <td>Book Name</td>
                </tr>
                <tr>
                    <td>
                        {{$LatestReview->book_name}}
                    </td>
                </tr>
                <tr>
                    <td>Author</td>
                </tr>
                <tr>
                    <td>
                        {{$LatestReview->author}}
                    </td>
                </tr>
                <tr>
                    <td>Book Description</td>
                </tr>
                <tr>
                    <td>
                        {!! $LatestReview->book_description !!}
                    </td>
                </tr>
                <tr>
                    <td>Book Review</td>
                </tr>
                <tr>
                    <td>
                        {!!  $LatestReview->book_review  !!}
                    </td>
                </tr>
                <tr>
                   <td>Library Name</td>
               </tr>
               <tr>
                <td>
                   {{$LatestReview->library_name}}
               </td>
           </tr>
           <tr>
             <td>Library Address</td>
         </tr>
         <tr>
            <td>
               {{ $LatestReview->library_address}}
           </td>
       </tr>
       <tr>
         <td>Library Contact</td>
     </tr>
     <tr>
        <td>
           {{$LatestReview->library_contact}}
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