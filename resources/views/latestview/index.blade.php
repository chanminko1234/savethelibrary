@extends('layouts.master')
@section('content')

@include('latestview.sidebar')
<div class="products">
	<div class="col-md-9 space">
		<h3>Featured Products</h3>
		<section>
			
			<div class="row">
				@foreach($marketingImages as $marketingImage)
				<article class="col-lg-3 col-md-3">
					<div class="book">
						<a href="#"><img src="{{ $marketingImage->showImage($marketingImage, $thumbnailPath) }}" alt="" class="bookthumb" /></a>
					</div>
					<div class="detail">
						<p>{{$marketingImage->book_name}}<br>{{$marketingImage->author}}<br>{{$marketingImage->library_name}}</p>
					</div>

				</article>
				@endforeach
			</div> 
		</section>

	</div>
</div>
@endsection


