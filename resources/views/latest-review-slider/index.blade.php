@extends('layout.app')



@section('content')
<div class="container">



  <h2>Books</h2>

  <hr/>

  @if($LatestReviews->count() > 0)

  <table class="table table-hover table-bordered table-striped market-table table-responsive">

   <thead>
     <td>Id</td>
     <td>Thumbnail</td>
     <td>Image Name</td>
     <td>Book Name</td>
     <td>Author</td>
     <td>Date Created</td>
     <th></th>
   </thead>

   <tbody>

    @foreach($LatestReviews as $LatestReview)

    <tr>
      <td><a href="{{url('backend/latest-review-slider/'. $LatestReview->id.'/edit')}}">{{ $LatestReview->id }}</a></td>

      <td><a href="{{url('backend/latest-review-slider/'.$LatestReview->id.'-'.$LatestReview->slug)}}"><img src="{{ $LatestReview->showImage($LatestReview, $thumbnailPath) }}"></a></td>

      <td><a href="{{url('backend/latest-review-slider/'.$LatestReview->id)}}">
        {{ $LatestReview->image_name }}</a></td>

        <td><a href="{{url('backend/latest-review-slider/'.$LatestReview->id.'-'.$LatestReview->slug)}}">{{$LatestReview->book_name}}</a></td>

        <td>{{$LatestReview->author}}</td>

        <td>{{ $LatestReview->created_at }}</td>

        <td class="edit_btn"><a href="{{url('backend/latest-review-slider/'.$LatestReview->id.'/edit')}}"><button type="button" class="btn btn-lg btn-primary">Edit</button></a></td>
      </tr>

      @endforeach

    </tbody>

  </table>

  @else

  Sorry, no Marketing Images

  @endif

  {{ $LatestReviews->links() }}
  <div> <a href="{{url('backend/latest-review-slider/create')}}">
    <button type="button" class="btn btn-lg btn-primary">
      Create New
    </button></a>
  </div>

</div>

@endsection