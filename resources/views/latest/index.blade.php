@extends('layouts.master')
@section('content')

<div class="container">
	<h2 class="active" style="margin-left: 80px;">Latest News</h2>
	<div class="specials-grids">
		<div class="row">
			<div class="col-md-12">
				<div class="special-grid col-md-3">
					<img src="{{asset('images/feature_image (2).jpg')}}" title="image-name">
					<a href="#">Latest Plans</a>
					<p>Lorem ipsum dolor sit amet consectetur adiing elit.</p>

					<img src="{{asset('images/feature_image (2).jpg')}}" title="image-name">
					<a href="#">Latest Plans</a>
					<p>Lorem ipsum dolor sit amet consectetur adiing elit.</p>

					<img src="{{asset('images/feature_image (2).jpg')}}" title="image-name">
					<a href="#">Latest Plans</a>
					<p>Lorem ipsum dolor sit amet consectetur adiing elit.</p>
				</div>
				<div class="special-grid col-md-3">
					<img src="{{asset('images/feature_image (2).jpg')}}" title="image-name">
					<a href="#">Pre Plans</a>
					<p>Lorem ipsum dolor sit amet consectetur adiing elit. </p>

					<img src="{{asset('images/feature_image (2).jpg')}}" title="image-name">
					<a href="#">Pre Plans</a>
					<p>Lorem ipsum dolor sit amet consectetur adiing elit. </p>

					<img src="{{asset('images/feature_image (2).jpg')}}" title="image-name">
					<a href="#">Pre Plans</a>
					<p>Lorem ipsum dolor sit amet consectetur adiing elit. </p>
				</div>
				<div class="col-md-3">
					<nav class="nav-sidebar pull-right">
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
					</nav>
				</div>
			</div>
		</div>

		{{-- </div> --}}











		@endsection