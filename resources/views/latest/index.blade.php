@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-md-12 space">
		<div class="col-md-9">
			@foreach($LatestNews as $LatestNew)
			<div class="special-grid col-md-3" style="margin-bottom: 10px;">
				<img src="{{ $LatestNew->showImage($LatestNew, $thumbnailPath) }}" title="image-name">
				<a href="{{url('/new_detail/'.$LatestNew->id.'-'.$LatestNew->slug)}}">{{$LatestNew->news_title}}</a>
				<span class="pull-left">Save the Library</span>
				<span class="date pull-right"><i class="fa fa-calendar-o"></i>{{ $LatestNew->date }}</span>
			</div>
			@endforeach
		</div>

		<div class="col-md-3">
			<nav class="nav-sidebar pull-right">
				<ul class="nav">
					<li class="active"><a href="/latest">Latest News <i class="fa fa-angle-right pull-right"></i></a></li>
					@foreach($LatestNews as $LatestNew)
					<li>
						<span class="date"><i class="fa fa-calendar-o"></i> {{ $LatestNew->date }}</span>
						<a href="{{url('/new_detail/'.$LatestNew->id.'-'.$LatestNew->slug)}}">{{$LatestNew->news_title}}</a>
					</li>
					<hr style="background-color: #d2d2d2;">
					@endforeach
				</ul>
			</nav>
		</div>
	</div>
</div>

{{-- </div> --}}











@endsection