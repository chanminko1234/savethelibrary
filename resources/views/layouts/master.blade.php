<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	@include('layouts.meta')

	@include('layouts.css')


	<title>Save The Library</title>

</head>
<body>

	@include('layouts.logo')
	<div class="row">
		
		<div class="col-md-12">
			@include('layouts.nav')
			<a href="#" class="scrollup">Scroll</a>
			@yield('content')
		</div>
		

	</div>
	@include('layouts.footer')


	@include('layouts.script')


</body>
</html>












