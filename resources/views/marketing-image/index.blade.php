@extends('layout.app')



@section('content')
<div class="container">

  <ol class='breadcrumb'>
    <li><a href='/'>Home</a></li>
    <li class='active'>Books</li>
  </ol>

  <h2>Books</h2>

  <hr/>

  @if($marketingImages->count() > 0)

  <table class="table table-hover table-bordered table-striped market-table table-responsive">

   <thead>
     <th>Id</th>
     <th>Thumbnail</th>
     <th>Name</th>
     <th>Book Name</th>
     <th>Author</th>
     <th>Category</th>
     <th>Date Created</th>
     <th>Action</th>
   </thead>

   <tbody>

    @foreach($marketingImages as $marketingImage)

    <tr>
      <td><a href="{{url('backend/marketing-image/'. $marketingImage->id.'/edit')}}">{{ $marketingImage->id }}</a></td>
      <td><a href="{{url('backend/marketing-image/'.$marketingImage->id.'-'.$marketingImage->slug)}}"><img src="{{ $marketingImage->showImage($marketingImage, $thumbnailPath) }}"></a></td>
      <td><a href="{{url('backend/marketing-image/'.$marketingImage->id.'-'.$marketingImage->slug)}}">{{ $marketingImage->image_name }}</a></td>
      <td><a href="{{url('backend/marketing-image/'.$marketingImage->id.'-'.$marketingImage->slug)}}">{{$marketingImage->book_name}}</a></td>
      <td>{{$marketingImage->author}}</td>
      <td>{{$marketingImage->category}}</td>
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