@extends('layout.app')



@section('content')
<div class="container">
  <h2>Location</h2>

  <hr/>

  @if($locationImages->count() > 0)

  <table class="table table-hover table-bordered table-striped market-table table-responsive">

   <thead>
     <th>Id</th>
     <th>Thumbnail</th>
     <th>Name</th>
     <th>Location Name</th>
     <th>Location Description</th>
     <th>Location Address</th>
     <th>Location Content</th>
     <th>Location Review</th>
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
        <a href="{{url('backend/marketing-image/'.$locationImage->id.'-'.$locationImage->slug)}}">{{ $locationImage->image_name }}
        </a>
      </td>
      <td>
        <a href="{{url('backend/marketing-image/'.$locationImage->id.'-'.$locationImage->slug)}}">{{$locationImage->location_name}}
        </a>
      </td>
      <td>
        {{$locationImage->location_desc}}
      </td>
      <td>
        {!! $locationImage->location_address!!}
      </td>
      <td>
        {!! $locationImage->location_content !!}
      </td>
      <td>
        {{$locationImage->location_review}}
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