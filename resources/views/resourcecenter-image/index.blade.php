@extends('layout.app')
@section('content')

<div class="container">
	<div class="col-md-12">

		<h2>Resource Center Images</h2>

		<hr/>

		@if($resourcecenterImages->count() > 0)

		<table class="table table-hover table-bordered table-striped">

			<thead>
				<td>Id</td>
				<td>Thumbnail</td>
				<td>Name</td>
				<td>Category_Name</td>
				<td>Download</td>
				<td>Date Created</td>
			</thead>

			<tbody>

				@foreach($resourcecenterImages as $resourcecenterImage)

				<tr>
					<td><a href="{{url('backend/resourcecenter-image/'. $resourcecenterImage->id.'/edit')}}">{{ $resourcecenterImage->id }}</a></td>
					<td><a href="{{ url('backend/resourcecenter-image/'. $resourcecenterImage->id) }}"><img src="{{ $resourcecenterImage->showImage($resourcecenterImage, $thumbnailPath) }}"></a></td>
					<td><a href="{{ url('backend/resourcecenter-image/. $resourcecenterImage->id') }}">{{ $resourcecenterImage->image_name }}</a></td>
					<td><a href="{{ url('backend/resourcecenter-image/. $resourcecenterImage->id') }}">{{ $resourcecenterImage->category_name }}</a></td>
					<td><a href="{{ url('backend/resourcecenter-image/. $resourcecenterImage->id') }}">{{ $resourcecenterImage->download }}</a></td>
					<td>{{ $resourcecenterImage->created_at }}</td>
					<td class="edit_btn"><a href="{{url('backend/resourcecenter-image/'.$resourcecenterImage->id.'/edit')}}"><button type="button" class="btn btn-lg btn-primary">Edit</button></a></td>
				</tr>

				@endforeach

			</tbody>

		</table>

		@else

		Sorry, no Resource Center Images

		@endif

		{{ $resourcecenterImages->links() }}

		<div> <a href="{{ url('backend/resourcecenter-image/create')}}">
			<button type="button" class="btn btn-lg btn-primary">
				Create New
			</button></a>
		</div>

	</div>
</div>





@endsection