@extends('layout.app')

@section('content')
<div class="container">

  <ol class='breadcrumb'>
    <li><a href='/'>Home</a></li>
    <li class='active'>Library Slider Images</li>
  </ol>

  <h2>Images</h2>

  <hr/>

  @if($LibrySliderImages->count() > 0)

  <table class="table table-hover table-bordered table-striped market-table table-responsive">

   <thead>
     <th>Id</th>
     <th>Thumbnail</th>
    <!--  <th>Name</th> -->
     <th>Library Name</th>
    <!--  <th>Library Address</th>
     <th>Library Contact</th> -->
     <th>Library Description</th>
     <th>Action</th>
   </thead>

   <tbody>

    @foreach($LibrySliderImages  as $librySliderImage)

    <tr>
      <td><a href="{{url('backend/library-slider/'. $librySliderImage->id.'/edit')}}">{{ $librySliderImage->id }}</a></a></td>

      <td><a href="{{url('backend/library-slider/'.$librySliderImage->id.'-'.$librySliderImage->library_slug)}}"><img src="{{ $librySliderImage->showImage($librySliderImage, $thumbnailPath) }}"></a></td>

       <!--  <td><a href="{{url('backend/library-slider/'.$librySliderImage->id.'-'.$librySliderImage->library_slug)}}">{{ $librySliderImage->image_name }}</a></td> -->


      <td><a href="{{url('backend/library-slider/'.$librySliderImage->id.'-'.$librySliderImage->library_slug)}}">{{$librySliderImage->library_name}}</a></td>
<!-- 
      <td>{!! $librySliderImage->library_address !!}</td>
      <td>{!! $librySliderImage->library_contact !!}</td>
 -->      <td>{!! $librySliderImage->library_description !!}</td>

      <td class="edit_btn"><a href="{{url('backend/library-slider/'.$librySliderImage->id.'/edit')}}"><button type="button" class="btn btn-lg btn-primary">Edit</button></a></td>
    </tr>

    @endforeach

  </tbody>

</table>

@else

Sorry, no Library Slider Images

@endif

{{ $LibrySliderImages->links() }}

<div> <a href="{{url('backend/library-slider/create')}}">
  <button type="button" class="btn btn-lg btn-primary">
    Create New
  </button></a>
</div>

</div>

@endsection