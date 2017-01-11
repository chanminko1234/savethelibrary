@extends('layouts.master')

@section('content')

<!-- Sidebar -->
<div class="container">
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
	<div class="col-md-9">
		<div class="products">
			<h3>Featured Products</h3>
			<table class="table tabel-stripped">
				<tr>
					<td class="col-md-3">
						<div class="product view">
							<img src="images/image01.jpg" alt="" />
							<div class="text">
								<p>Book Name by John Smith</p>
							</div>
						</div>
						

						<button type="download">DOWNLOAD</button>
					</td>
					<td class="col-md-3">
						<div class="product view">
							<img src="images/image01.jpg" alt="" />
							<div class="text">
								<p>Book Name by John Smith</p>
							</div>
						</div>

						<button type="download">DOWNLOAD</button>
					</td>
					{{-- <td>
						<div class="product view">
							<img src="images/image01.jpg" alt="" />
							<div class="text">
								<p>Book Name by John Smith</p>
							</div>
						</div>

						<button type="download">DOWNLOAD</button>
					</td> --}}
				</tr>
				<tr>
					<td class="col-md-3">
						<div class="product view">
							<img src="images/image01.jpg" alt="" />
							<div class="text">
								<p>Book Name by John Smith</p>
							</div>
						</div>

						<button type="download">DOWNLOAD</button>
					</td>
					<td class="col-md-3">
						<div class="product view">
							<img src="images/image01.jpg" alt="" />
							<div class="text">
								<p>Book Name by John Smith</p>
							</div>
						</div>

						<button type="download">DOWNLOAD</button>
					</td>
					{{-- <td>
						<div class="product view">
							<img src="images/image01.jpg" alt="" />
							<div class="text">
								<p>Book Name by John Smith</p>
							</div>
						</div>


						<button type="download">DOWNLOAD</button>
					</td> --}}
				</tr>
				<tr>
					<td class="col-md-3">
						<div class="product view">
							<img src="images/image01.jpg" alt="" />
							<div class="text">
								<p>Book Name by John Smith</p>
							</div>
						</div>

						<button type="download">DOWNLOAD</button>
					</td>
					<td class="col-md-3">
						<div class="product view">
							<img src="images/image01.jpg" alt="" />
							<div class="text">
								<p>Book Name by John Smith</p>
							</div>
						</div>


						<button type="download">DOWNLOAD</button>
					</tr>
				</table>
			</div>
			<!-- End Products -->

			@endsection