<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	 <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('/') }}public/front-end/images/70-50.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/vendor/bootstrap/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front-end/css/main.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/jquery/parsley.js"></script>
	<!--===============================================================================================-->
 <style>
 .box
 {
  width:100%;
  max-width:600px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:16px;
  margin:0 auto;
 }
 input.parsley-success,
 select.parsley-success,
 textarea.parsley-success {
   color: #468847;
   background-color: #DFF0D8;
   border: 1px solid #D6E9C6;
 }

 input.parsley-error,
 select.parsley-error,
 textarea.parsley-error {
   color: #B94A48;
   background-color: #F2DEDE;
   border: 1px solid #EED3D7;
 }

 .parsley-errors-list {
   margin: 2px 0 3px;
   padding: 0;
   list-style-type: none;
   font-size: 0.9em;
   line-height: 0.9em;
   opacity: 0;

   transition: all .3s ease-in;
   -o-transition: all .3s ease-in;
   -moz-transition: all .3s ease-in;
   -webkit-transition: all .3s ease-in;
 }

 .parsley-errors-list.filled {
   opacity: 1;
 }
 
 .parsley-type, .parsley-required, .parsley-equalto{
  color:#ff0000;
 }
 
 </style>
 	<!--===============================================================================================-->

</head>
<body class="animsition">

	
	

	@yield('body')


	<!-- Footer -->
	@include('front.include.footer')

	<!-- Back to top -->
	<div class="btn-back-to-top1 bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top1">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{ asset('/') }}public/front-end/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/') }}public/front-end/js/main.js"></script>
	 <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
          <script>
    @if($errors->any())
        @foreach($errors->all() as $error)
              toastr.error('{{ $error }}','Error',{
                  closeButton:true,
                  progressBar:true,
               });
        @endforeach
    @endif
</script>

	<script>  
$(document).ready(function(){  
    $('#validate_form').parsley();
 

});  
</script>
<script >
	$('#countn').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>

<script >
	$('#countm').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>

</body>
</html>
