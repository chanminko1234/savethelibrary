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
<div class="col-md-9">
	<div class="products">
		<h3>Featured Products</h3>
		<table class="table tabel-stripped">
			<tr>
				<td><div class="product">
					<a href="#" class="info">
						<span class="holder">
							<img src="images/image01.jpg" alt="" />
							<span class="book-name">Book Name</span>
							<span class="author">by John Smith</span>
						</span>
					</a>
					<button type="download">DOWNLOAD</button>
				</div>
			</td>
			<td><div class="product">
				<a href="#" class="info">
					<span class="holder">
						<img src="images/image02.jpg" alt="" />
						<span class="book-name">Book Name</span>
						<span class="author">by John Smith</span>
					</span>
				</a>
				<button type="download">DOWNLOAD</button>
			</div>
		</td>
		<td><div class="product">
			<a href="#" class="info">
				<span class="holder">
					<img src="images/image03.jpg" alt="" />
					<span class="book-name">Book Name</span>
					<span class="author">by John Smith</span>
				</span>
			</a>
			<button type="download">DOWNLOAD</button>
		</div>
	</td>
</tr>
<tr>
	<td><div class="product">
		<a href="#" class="info">
			<span class="holder">
				<img src="images/image04.jpg" alt="" />
				<span class="book-name">Book Name</span>
				<span class="author">by John Smith</span>
			</span>
		</a>
		<button type="download">DOWNLOAD</button>
	</div>
</td>
<td><div class="product">
	<a href="#" class="info">
		<span class="holder">
			<img src="images/image05.jpg" alt="" />
			<span class="book-name">Book Name</span>
			<span class="author">by John Smith</span>
		</span>
	</a>
	<button type="download">DOWNLOAD</button>
</div>
</td>
<td><div class="product">
	<a href="#" class="info">
		<span class="holder">
			<img src="images/image06.jpg" alt="" />
			<span class="book-name">Book Name</span>
			<span class="author">by John Smith</span>
		</span>
	</a>
	<button type="download">DOWNLOAD</button>
</div>
</td>
</tr>
<tr>
	<td><div class="product">
		<a href="#" class="info">
			<span class="holder">
				<img src="images/image07.jpg" alt="" />
				<span class="book-name">Book Name</span>
				<span class="author">by John Smith</span>
			</a>
			<button type="download">DOWNLOAD</button>
		</div>
	</td>
	<td><div class="product">
		<a href="#" class="info">
			<span class="holder">
				<img src="images/image08.jpg" alt="" />
				<span class="book-name">Book Name</span>
				<span class="author">by John Smith</span>
			</span>
		</a>
		<button type="download">DOWNLOAD</button>
	</div>
</td>
</tr>
</table>
<!-- End Products -->

@endsection