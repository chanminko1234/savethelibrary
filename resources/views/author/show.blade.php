@extends('layout.app')
@section('content')
<section class="content-header">
	<h1>
		Author
		<small>Detail</small>
	</h1>
</section>

<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-body">
				<div class="row">

					<div class="col-md-12">
						<form action="{{ url('backend/author') }}" method="post">
							{{ csrf_field() }}
							<div class="form-group">
								<label class="control-label" for="author_name">Author</label>
								<br>
								<p>{{ $author->author_name }}</p>
							</div>

						</div>                           
					</form>
				</div>                    
			</div>
		</div>            
	</div>        
</div>    
</div>
@endsection