@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-md-12 space">
		<div class="col-md-9">
			@foreach($locationImages as $locationImage)
			<div class="special-grid col-md-3">
				<img src="{{ $locationImage->showImage($locationImage, $thumbnailPath) }}" title="image-name" >
				<a href="{{ url('/library_detail/'.$locationImage->id.'-'.$locationImage->location_slug) }}">{{$locationImage->location_name }}</a>
				<span class="pull-left"><i class="fa fa-home fa-2x"></i>{!! $locationImage->location_address!!}</span>
				<span class="read-article pull-right">ရန်ကုန်</span>
			</div>
			@endforeach
		</div>
		<div class="col-md-3">
			<div class="right-sidebar">
				<h2>Category</h2>
				<div class="panel-group" id="accordion"><!--category-productsr-->
					@foreach($states as $state)
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#{{$state->id}}">
									<span class="badge pull-right"><i class="fa fa-arrow-down"></i></span>

									{{ $state->name }}
								</a>
							</h4>
						</div>
						<div id="{{$state->id}}" class="panel-collapse collapse">
							<div class="panel-body">
								<ul>
									@foreach($cities->where('state_id', $state->id)->all() as $city)
									<li><a href="{{ url('libraries/city/'.$city->id ) }}" >{{$city->name}}
									</a></li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection