@extends('layout.app')

@section('content')
<div class="container">
  <h2>Images</h2>

  <hr/>

  @if($LatestNews->count() > 0)

  <table class="table table-hover table-bordered table-striped market-table table-responsive">

   <thead>
     <th>Id</th>
     <th>Thumbnail</th>
     <th>News Title</th>
     <th>News Description</th>
     <th>Date</th>
     <th>Time</th>
     <th>Location</th>
     <th></th>
   </thead>

   <tbody>

    @foreach($LatestNews as $LatestNew)

    <tr>
      <td><a href="{{url('backend/latest-news/'. $LatestNew->id.'/edit')}}">{{ $LatestNew->id }}</a></a></td> 

      <td><a href="{{url('backend/latest-news/'.$LatestNew->id.'-'.$LatestNew->slug)}}"><img src="{{ $LatestNew->showImage($LatestNew, $thumbnailPath) }}"></a></td> 

      


      <td><a href="{{url('backend/latest-news/'.$LatestNew->id.'-'.$LatestNew->slug)}}">{{$LatestNew->news_title}}</a></td> 


      <td>{!! $LatestNew->news_description !!}</td> 
      <td>{{ $LatestNew->date }}</td> 

      <td>{{ $LatestNew->time }}</td>

      <td>{{ $LatestNew->location }}</td> 

      <td class="edit_btn"><a href="{{url('backend/latest-news/'.$LatestNew->id.'/edit')}}"><button type="button" class="btn btn-lg btn-primary">Edit</button></a></td>
    </tr>

    @endforeach

  </tbody>

</table>

@else

Sorry, no Latest News Images

@endif

{{ $LatestNews->links() }}

<div> <a href="{{url('backend/latest-news/create')}}">
  <button type="button" class="btn btn-lg btn-primary">
    Create New
  </button></a>
</div>

</div>

@endsection