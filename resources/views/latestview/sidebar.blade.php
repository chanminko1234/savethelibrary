
<!-- Sidebar -->

<div class="col-md-3">
	<div id="sidebar">
		<ul class="categories">
			<li>
				<h4>Categories</h4>
				<ul>
					@foreach($categories as $category)
					<li><a href="">{{ $category->category_name }}</a></li>
					@endforeach
				</ul>
			</li>
			<li>
				<h4>Authors</h4>
				<ul>
					@foreach($authors as $author)
					<li><a href="">{{ $author->author_name }}</a></li>
					@endforeach
				</ul>
			</li>
		</ul>
	</div>
</div>

