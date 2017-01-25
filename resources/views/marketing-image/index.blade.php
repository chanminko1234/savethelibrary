@extends('layout.app')



@section('content')
<div class="container">



  <h2>Books</h2>

  <hr/>

  @if($marketingImages->count() > 0)

  <table class="table table-hover table-bordered table-striped market-table table-responsive">

   <thead>
     <td>Id</td>
     <td>Thumbnail</td>
     <td>Book Name</td>
     <td>Author</td>
     <td>Date Created</td>
     <th></th>
   </thead>

   <tbody>

    @foreach($marketingImages as $marketingImage)

    <tr>
      <td><a href="{{url('backend/marketing-image/'. $marketingImage->id.'/edit')}}">{{ $marketingImage->id }}</a></td>
      <td><a href="{{url('backend/marketing-image/'.$marketingImage->id.'-'.$marketingImage->slug)}}"><img src="{{ $marketingImage->showImage($marketingImage, $thumbnailPath) }}"></a></td>
      <td><a href="{{url('backend/marketing-image/'.$marketingImage->id.'-'.$marketingImage->slug)}}">{{$marketingImage->book_name}}</a></td>
      <td>{{$marketingImage->author}}</td>
      <td>{{ $marketingImage->created_at }}</td>
      <td class="edit_btn"><a href="{{url('backend/marketing-image/'.$marketingImage->id.'/edit')}}"><button type="button" class="btn btn-lg btn-primary">Edit</button></a></td>
    </tr>

    @endforeach

  </tbody>

</table>

@else

Sorry, no Marketing Images

@endif

{{ $marketingImages->links() }}

<div> <a href="{{url('backend/marketing-image/create')}}">
  <button type="button" class="btn btn-lg btn-primary">
    Create New
  </button></a>
</div>

</div>

@endsection