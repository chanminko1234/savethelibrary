<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Save The Library</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
  <!-- summernote-->
  <link rel="stylesheet" href="{{asset('css/summernote.css')}}">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">

  <!-- sweet alert-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
  @include('layout.css')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">

		@include("backend.nav")
		<!-- Left side column. contains the logo and sidebar -->
		@include("backend.sidebar")

		<div class="content-wrapper">		
			@yield("content")
		</div>
		@include("backend.rightsidebar")

		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<b>Version</b> 2.3.7
			</div>
			<strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
			reserved.
		</footer>
	</div>

	<!-- sweet alert-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<!-- jQuery 2.2.3 -->
	<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="{{ asset('js/app.js')}}"></script>
	<!-- FastClick -->
	<script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('dist/js/app.min.js') }}"></script>
	<!-- Sparkline -->
	<script src="{{ asset('plugins/sparkline/jquery.sparkline.min.js') }}"></script>
	<!-- jvectormap -->
	<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<!-- SlimScroll 1.3.0 -->
	<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
	<!-- ChartJS 1.0.1 -->
	<script src="{{ asset('plugins/chartjs/Chart.min.js') }}"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('dist/js/demo.js') }}"></script>
	<!-- summernote-->


	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

	@yield('scripts')

	@include('sweet::alert')




	<script type="text/javascript">
		$('#state').on('change', function(){
			// e.preventDefault();
			// self.parents(".frmSelect").submit();
			$(this).parents('.frmDelete').submit();
		});
		// $('#state').change(
		// 	function(){
		// 		alert('kkk');
		// 		$(this).closest('.frmSelect').trigger('submit');
		//           or:
		//          $('#formElementId').trigger('submit');
		//             or:
		//          $('#formElementId').submit();
		
		//      });


		$(document).ready(function() {
			$('#summernote').summernote({
				height:200,
				placeholder: 'Description...'
			});

		});

		$(document).ready(function() {
			$('#summernote2').summernote({
				height:200,
			});
		});

		$(document).ready(function() {
			$('#summernote3').summernote({
				height:200,
			});
		});

		$("#content").summernote()
		$('.dropdown-toggle').dropdown()

	</script>
</body>
</html>