@extends('layout.app')



@section('content')
<div class="container">

<ol class='breadcrumb'>
  <li><a href='/'>Library</a></li>
  <li class='active'>Location</li>
</ol>

<h2>Libraries</h2>

<hr/>

@if($locationImages->count() > 0)

<table class="locationtaple table table-hover table-bordered table-striped market-table table-responsive">

 <thead>
   <th>Id</th>
   <th>Thumbnail</th>
   <th>Name</th>
   <th>Address</th>
   <th>Town</th>
   <th>Library Location</th>
   <th></th>
 </thead>

 <tbody>

  @foreach($locationImages as $locationImage)

  <tr>
    <td>
      <a href="{{url('backend/location_image/'. $locationImage->id.'/edit')}}">{{ $locationImage->id }}
      </a>
    </td>
    <td>
      <a href="{{url('backend/location_image/'.$locationImage->id.'-'.$locationImage->slug)}}">
      <img src="{{ $locationImage->showImage($locationImage, $thumbnailPath) }}">
      </a>
    </td>
  
    <td>
      <a href="{{url('backend/location_image/'.$locationImage->id.'-'.$locationImage->slug)}}">{{$locationImage->library_name}}
      </a>
    </td>
    <td>
      {{$locationImage->library_address}}
    </td>
    <td>
      {!! $locationImage->library_town!!}
    </td>
    <td>
      {!! $locationImage->library_location!!}
    </td>
    <td class="edit_btn">
      <a href="{{url('backend/location_image/'.$locationImage->id.'/edit')}}"><button type="button" class="btn btn-lg btn-primary">Edit</button>
      </a>
    </td>
  </tr>

  @endforeach

</tbody>

</table>

@else

Sorry, no Location....

@endif

{{ $locationImages->links() }}

<div> <a href="{{url('backend/location_image/create')}}">
  <button type="button" class="btn btn-lg btn-primary">
    Create New
  </button></a>
</div>

</div>

@endsection