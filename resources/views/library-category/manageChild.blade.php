<ul>

	@foreach($childs as $child)

	<li>

		<a href="{{url('backend/library-category/edit/'.$child->id)}}" class="btn btn-group">  {{ $child->title }}
		</a>

		

		@if(count($child->childs))

		@include('library-category.manageChild',['childs' => $child->childs])



		@endif

	</li>

	@endforeach



</ul>