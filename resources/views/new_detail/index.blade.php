@extends('layouts.master')
@section('content')
<div class="specials-grids">
	<div class="row">
		<div class="col-md-12">
			@foreach($LatestNews as $LatestNew)
			<div class="col-md-9">
				
				<img src="{{ $LatestNew->showImage($LatestNew, $thumbnailPath) }}" title="image-name" class="image11"><br />
				<a href="/new_detail">{{$LatestNew->news_title}}</a> <br />
				
				<span class="pull-left"><i class="fa fa-home fa-2x"></i>Save the Library</span>
				<span class="date pull-right"><i class="fa fa-calendar-o"></i>{!! $LatestNew->date !!}</span>				<hr>

				<p>{!! $LatestNew->news_description !!}<br>{!! $LatestNew->date !!}<br>{!! $LatestNew->time !!}<br>{!! $LatestNew->location !!}</p>
				
				
			</div>
			@endforeach
			<div class="col-md-3">
				<div class="right-sidebar">
					
					<ul class="nav">
						<li class="active"><a href="#">Latest News <i class="fa fa-angle-right pull-right"></i></a></li>
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
				</div><!--/category-products-->
				<div class="clearfix">
					
				</div>
			</div>

		</div>


	</div>{{-- </div> --}}
	@endsection