@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-md-12 space">
		<div class="col-md-9">
			@foreach($LatestNews as $LatestNew)
			<div class="special-grid col-md-3">
				<img src="{{ $LatestNew->showImage($LatestNew, $thumbnailPath) }}" title="image-name">
				<a href="{{url('/new_detail/'.$LatestNew->id.'-'.$LatestNew->slug)}}">{{$LatestNew->news_title}}</a>
				<span class="pull-left"><i class="fa fa-home fa-2x"></i>Save the Library</span>
				<span class="date pull-right"><i class="fa fa-calendar-o"></i>{!! $LatestNew->date !!}</span>				<hr>
			</div>
			@endforeach
		</div>

		<div class="col-md-3">
			<nav class="nav-sidebar pull-right">
				<ul class="nav">
					<li class="active"><a href="/latest">Latest News <i class="fa fa-angle-right pull-right"></i></a></li>
					<li>
						<div class="info">
							<span class="date"><i class="fa fa-calendar-o"></i>11-Jan-2017</span>
						</div>
						<div class="caption">
							<a href="javascript:;">A link with .text-overflow can be applied in case it's too long!</a>
						</div>
					</li>
					<li>
						<div class="info">
							<span class="date"><i class="fa fa-calendar-o"></i>11-Jan-2017</span>
						</div>
						<a href="javascript:;">A link with .text-overflow can be applied in case it's too long!</a>
					</li>
					<li>
						<div class="info">
							<span class="date"><i class="fa fa-calendar-o"></i>11-Jan-2017</span>
						</div>
						<a href="javascript:;">
							A long link will naturally wrap around
						</a>
					</li>
					<li>
						<div class="info">
							<span class="date"><i class="fa fa-calendar-o"></i>11-Jan-2017</span>
						</div>
						<a href="javascript:;">A long link will naturally wrap around</a>
					</li>
					<li>
						<div class="info">
							<span class="date"><i class="fa fa-calendar-o"></i>11-Jan-2017</span>
						</div>
						<a href="javascript:;">A long link will naturally wrap around</a>
					</li>
					<li>
						<div class="info">
							<span class="date"><i class="fa fa-calendar-o"></i>11-Jan-2017</span>
						</div>
						<a href="javascript:;">A long link will naturally wrap around</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>

{{-- </div> --}}











@endsection