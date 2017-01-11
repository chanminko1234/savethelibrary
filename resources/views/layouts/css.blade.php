<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Open+Sans|Padauk" rel="stylesheet">

 <!-- Bootstrap -->
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


 <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
 <link href="{{asset('css/snackbar.min.css')}}" rel="stylesheet">

 <!-- Bootstrap Material Design -->
 <link href="{{ asset('css/bootstrap-material-design.css') }}" rel="stylesheet">
 <link href="{{ asset('css/ripples.min.css') }}" rel="stylesheet">

 <!-- font Awesome CSS -->
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



 <!-- Main Styles CSS -->
 <link href="{{ asset('css/main.css') }}" rel="stylesheet">

 <style>
	
	
	.navbar{
		font-family: Lato;
	}
	h1
	h2
	h3
	h4
	h5
	h6{
		font-family: Montserrat;
	}
	p{
		font-family: Padauk;
		font-size: medium;
		text-decoration: none;

	}
	a, a:hover, a:focus {
   		color: black;
    	text-decoration: none;


	}
	p:hover{
		color: #ACD7EE;
	}


 	.booktext{
 		padding-left: 30px;
 		padding-right: 30px;

 	}
 	.bookthumb{
 		width: 106px;
 		height: 161px;
 		padding: 15px 15px 15px 15px;
 	}
 	.latest{
 		list-style: none;
 	}
 	
 	.newimg img{
 		width:300px;
 		height:200px;
 		border-radius: 5px;
 		background-color: pink;
 		margin-left: 20px;
 	}	

 	.newstext{
 		margin-left: 15px;
 		text-align: justify;
 		display: block;
 		margin-left: 5px;
 	}

 	.imgcontainer{
 		margin-left: 210px;
 	}

 	.photo{
 		height: 300px;
 		width: 300px;
 	}
 	.review{
 		height: 200px;
 		width: 200px;
 	}
 	.logoimg{

 		height:200px;
 		margin-left: 300px;
 		margin-right: 300px;
 		margin-top: 10px;
 		margin-bottom: 10px;
 	}
 	.footerimg{
 		width:160px;
 		height:150px;
 		margin-left: 200px;
 		margin-top: 45px;
 		margin-bottom: 10px;
 	}

 	.logotext{
 		margin-left: 200px;
 		margin-top: -5px;
 	}

 	.footer{
 		width: auto;
 		height:250px;
 		clear: both;
 		background-color: rgb(0,150,136);
 	}

 	.footerdev{
 		margin-bottom: 10px;
 		margin-top: 20px;
 	}
 	.blue
 	{
 		background-color: blue;
 		border-radius: 100%;
 		border: 1x solid grey;
 		padding:10px;
 		display: inline-block;
 		font-size: 30px;
 		color: white;

 	}
 	.ul{
 		margin-right: 40px;
 	}
 	.ul img{
 		width: 500px;
 		height: 300px;
 		padding-left: 100px;

 	}
 	.panel-group {
 		overflow: auto;
 		font-family: verdana;
 		font-size: 12px;
 		font-weight: 200;
 		position: absolute;
 		width: 300px;
 		height: 700px;
 	}
 	
 	.affix {
 		top: 0px;
 		width: 100%;
 	}

 	.affix + .container-fluid {
 		padding-top: 70px;
 	}
 	/*----special-grid------*/
 	.special-grid {
 		float: left;
 		width: 300px;
 		text-align: center;
 		margin-right: 3%;
 	}
 	.special-grid:nth-child(3){
 		margin-right: 0%;
 	}
 	.specials {
 		margin-top: 1em;
 	}
 	.special-grid img{
 		width:100%;
 	}
 	.special-grid a{
 		text-transform: uppercase;
 		font-size: 1.2em;
 		color: #e1184a;
 		font-family: 'Quattrocento Sans', sans-serif;
 		text-shadow: 0 1px 0 white;
 		transition: 0.5s ease;
 		-moz-transition: 0.5s ease;
 		-o-transition: 0.5s ease;
 		-webkit-transition: 0.5s ease;
 		padding: 0.5em 0;
 		display: block;
 	}
 	.special-grid a:hover{
 		color: #555555;
 	}
 	.special-grid p{
 		color: #575757;
 		line-height: 1.8em;
 		font-size: 0.8925em;
 	}
 	.specials-grids {
 		padding: 2% 0;
 		text-align: center;
 		margin-left: 70px;
 	}
 	button[type=download]{
 		background-color: #4CAF50;
 		border: none;
 		color: white;
 		padding: 9px 11px;
 		text-decoration: none;
 		margin: 4px 2px;
 		cursor: pointer;
 	}

	/*latestview*/
	.view{
		display: flex;
		flex-flow: row wrap;
		width: 800px;
				
	}
	.book{
		 justify-content: flex-start;
  		 height: 150px;
  		
	}
	.text{
		float:right;
		padding: 15px;
		justify-content: center;
	}
	@media screen and (max-width: 360px)
	{
		.view{
		display: flex;
		flex-flow: row wrap;
		width: 300px;
				
	}
	.book{
		 justify-content: flex-start;
  		 height: 150px;
  		
	}
	.text{
		float:right;
		padding: 15px;
		justify-content: center;
	}

	}
	@media screen and (max-width: 600px)
	{
		.view{
		display: flex;
		flex-flow: row wrap;
		width: 300px;
				
	}
	.book{
		 justify-content: flex-start;
  		 height: 150px;
  		 padding-left: 45px;
  		
	}
	.text{
		float:right;
		padding: 15px;
		justify-content: center;
	}

	}
	@media screen and (max-width: 384px)
	{
	.logoimg {
    	height: 200px;
    	margin-left: -40px;
    	margin-right: 300px;
    	margin-top: 10px;
    	margin-bottom: 10px;
	}
		.view{
		display: flex;
		flex-flow: row wrap;
		width: 400px;
				
	}
	.book{
		 justify-content: flex-start;
  		 height: 150px;
  		 margin-left: -80px;
  		
	}
	.text{
		float:right;
		padding: 5px;
		justify-content: center;
	}

	}
	@media screen and (max-width: 768px)
	{
	.logoimg {
    	height: 200px;
    	margin-left: -40px;
    	margin-right: 300px;
    	margin-top: 10px;
    	margin-bottom: 10px;
	}
		.view{
		display: flex;
		flex-flow: row wrap;
		width: 400px;
				
	}
	.book{
		 justify-content: flex-start;
  		 height: 150px;
  		 margin-left: -80px;
  		
	}
	.text{
		float:right;
		padding: 5px;
		justify-content: center;
	}
	.col-md-3{
		width: 25%;
		

	}
	}

 	}
 	.product{
 		justify-content: flex-start;
 		height: 150px;
 	}
 	.nav-sidebar { 
 		width: 100%;
 		padding: 8px 0; 
 		border-right: 1px solid #ddd;
 	}
 	.nav-sidebar a {
 		color: #333;
 		-webkit-transition: all 0.08s linear;
 		-moz-transition: all 0.08s linear;
 		-o-transition: all 0.08s linear;
 		transition: all 0.08s linear;
 		-webkit-border-radius: 4px 0 0 4px; 
 		-moz-border-radius: 4px 0 0 4px; 
 		border-radius: 4px 0 0 4px; 
 	}
 	.nav-sidebar .active a { 
 		cursor: default;
 		background-color: #009688; 
 		color: #fff; 
 		text-shadow: 1px 1px 1px #666; 
 	}
 	.nav-sidebar .active a:hover {
 		background-color: #009688;   
 	}
 	.nav-sidebar .text-overflow a,
 	.nav-sidebar .text-overflow .media-body {
 		white-space: nowrap;
 		overflow: hidden;
 		-o-text-overflow: ellipsis;
 		text-overflow: ellipsis; 
 	}

 	/* Right-aligned sidebar */
 	.nav-sidebar.pull-right { 
 		border-right: 0; 
 		border-left: 1px solid #ddd; 
 	}
 	.nav-sidebar.pull-right a {
 		-webkit-border-radius: 0 4px 4px 0; 
 		-moz-border-radius: 0 4px 4px 0; 
 		border-radius: 0 4px 4px 0; 
 	}
 	.category-caption{
 		font-size: 14px;
 		color: #fff;
 		background-color: #009688;
 		padding-top: 11px;
 		padding-right: 20px;
 		padding-bottom: 11px;
 		padding-left: 20px;
 		letter-spacing: 2px;
 		margin: 0px 2px 2px 0px;
 	}



 </style>

