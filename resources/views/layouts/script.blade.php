  <script src="{{ asset('js/ripples.js') }}"></script>
  <script src="{{ asset('js/material.js') }}"></script>

  <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('js/jquery.simpleQuote.js')}} "></script>

  <!-- Call functions on document ready -->
  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    
    $( document ).ready(function() 
    {
      $(function() 
      {
        $.material.init();
      });
    });
  	// Can also be used with $(document).ready()
  	// $(window).load(function() {
  	// 	$('.flexslider').flexslider({
  	// 		animation: "slide",
   //      slideshow:false
   //    });
  	// });
  // Can also be used with $(document).ready()
  $(window).load(function() {
    $('.flexslider1').flexslider({
      animation: "slide",
      itemWidth: 100,
      itemMargin: 5,
      minItems: 2,
      maxItems: 3
    });
  });

  $(window).load(function() {
    $('.flexslider2').flexslider({
      animation: "slide",
      itemWidth: 100,
      itemMargin: 5,
      minItems: 2,
      maxItems: 4
    });
  });

  $(document).ready(function() {
            // Call Menu Toggler
            appMaster.menuToggler();
            // Example Call anotherFunction
            appMaster.anotherFunction();
          });
  $(document).ready(function () {
   $(window).scroll(function () {
     if ($(this).scrollTop() > 100) {
       $('.scrollup').fadeIn();
     } else {
       $('.scrollup').fadeOut();
     }
   });
   $('.scrollup').click(function () {
     $("html, body").animate({
       scrollTop: 0
     }, 600);
     return false;
   });
 });
  $("#simpleQuote").simpleQuote({ 
    speed : 5000 
  }, { 
    includeAuthor : true 
  });
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/my_MM/sdk.js#xfbml=1&version=v2.8&appId=1766729493579168";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  /*adding background image & show/hide logo in navbar*/
  $(window).scroll(function() {
    if($(this).scrollTop()>10){
      $('.navbar').removeClass("nav-booster");
      $('.navbar-brand').show();
      $('#content-container').removeClass('seperate-nav-body');
      $('#content-container').addClass('mg-top-100');
    }else{
      $('.navbar').addClass("nav-booster");
      $('.navbar-brand').hide();
      $('#content-container').addClass('seperate-nav-body');
      $('#content-container').removeClass('mg-top-100');
    }
  });
</script>
