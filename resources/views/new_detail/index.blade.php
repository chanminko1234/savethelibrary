@extends('layouts.master')
@section('content')
<div class="specials-grids">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-7">
				<div class="row text-center">
					<img src="{{ $LatestNew->showImage($LatestNew, $thumbnailPath) }}" title="image-name" class="image11 img-responsive">
					<a href="#">{{$LatestNew->news_title}}</a> 
				</div>
				<div class="row">
					<span class="pull-left">Save the Library</span>
					<span class="date pull-right"><i class="fa fa-calendar-o"></i>{!! $LatestNew->date !!}</span>
				</div>
				<hr style="background-color: #d2d2d2;">
				<div class="row">
					{!! $LatestNew->news_description !!}
					<p>
						{!! $LatestNew->date !!}<br>
						{!! $LatestNew->time !!}<br>
						{!! $LatestNew->location !!}</p>
					</div>

				</div>
				<div class="col-md-3 pull-right">
					<div class="nav-sidebar pull-right">

						<ul class="nav">
							<li class="active"><a href="/latest">Latest News <i class="fa fa-angle-right pull-right"></i></a></li>
							@foreach($LatestNews as $LatestNew)
							<li>
								<span class="date"><i class="fa fa-calendar-o"></i> {{ $LatestNew->date }}</span>
								<a href="{{url('/new_detail/'.$LatestNew->id.'-'.$LatestNew->slug)}}">{!! $LatestNew->news_title !!}</a>
							</li>
							<hr style="background-color: #d2d2d2;">
							@endforeach
						</ul>
					</div><!--/category-products-->
					<div class="clearfix">

					</div>
				</div>

			</div>


		</div>{{-- </div> --}}
		@endsection