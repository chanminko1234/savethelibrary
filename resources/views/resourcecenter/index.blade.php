@extends('layouts.master')

@section('content')

<!-- Sidebar -->
<div class="col-md-3">
	<div id="sidebar">
		<ul class="categories">
			<li>
				<h4>Categories</h4>
				<ul>
					<li><a href="#">အသံထွက်ဝတ္ထု</a></li>
					<li><a href="#">ကလေးဂျာနယ်</a></li>
					<li><a href="#">စွယ်စံုကျမ်း</a></li>
					<li><a href="#">အညွှန်း</a></li>
					<li><a href="#">စာကြည့်တိုက်</a></li>
					<li><a href="#">ဥပဒေများ</a></li>
					<li><a href="#">စာတမ်း</a></li>
					<li><a href="#">ဓာတ်ပံုပညာ</a></li>
					<li><a href="#">နည်းပညာ</a></li>
					<li><a href="#">ပညာရေး</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<!-- End Sidebar -->
<!-- Products -->
<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
	<div class="row">
		@foreach($resourcecenterImages as $resourcecenterImage)
		<div class="col-sm-6 col-md-6 col-lg-6">
			<div class="row">
				<div class="col-md-6 ">
					<img src="{{ $resourcecenterImage->showImage($resourcecenterImage, $thumbnailPath) }}" class="resourceimg img-responsive" alt="" >
					<a href="#" class=" btn text-center hidden-xs hidden-sm resourcebtn" type="download" role="button">

						<span style="margin-left: -13px;">Download</span></a>
					</div>

					<div class="col-md-6 col-sm-6">
						<div class="caption resourcecaption">
							<br>
							<p><span class=" h4">{{ $resourcecenterImage->book_name }}</span>
								<br>
								<span class="h4">{{ $resourcecenterImage->category_name }}</span></p>
								<p>
									<a href="{{ $resourcecenterImage->download }}" class="btn text-center visible-xs visible-sm hidden-md hidden-lg resourcebtn2" type="download" role="button" ><span class="downbtn" >Download</span></a>
								</p>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<!-- End Products -->
	@endsection