<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="enamad" content="587027"/>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">

    <!-- ioniconse -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/front/css/owl.theme.default.min.css') }}">

    <!-- toastr -->
    <link rel="stylesheet" href="{{asset('assets/front/css/toastr.css')}}">

    <!-- css  -->
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css?v=2.2.9') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="icon" type="image/png" href="{{asset('assets/front/icon/favicon.png')}}"/>


    
    @yield('css')
    
    <title>فروشگاه آکام پارس @yield('title') </title>
   
</head>


<body class="loading">
	<div class="modal" id="load-modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content border-0">
				<div class="modal-body">
					<div class="d-flex justify-content-center">
						<img src="{{ asset('/assets/front/icon/logo.svg') }}" alt="">
					</div>
					<div class="lds-ellipsis">
						<div></div>
						<div></div>
						<div></div>
						<div></div>										
					</div>
				</div>
				
			</div>
		</div>
	</div>

	
<!-- Navigation -->
@include('includes.header')

<!-- Page Content -->
@yield('content')

<!-- Footer -->
@include('includes.footer')

<script type="text/javascript">
    var mainurl = "{{url('/')}}";
</script>

<script type="text/javascript">
    var mainurl = "{{url('/')}}";
    var gs      = {!! json_encode($gs) !!};
    var langg    = {!! json_encode($langg) !!};
    var isLogin = "{{Auth::check()}}";
</script>

    <!--bootstrap jquery -->
    <script src="{{asset('assets/front/js/jquery-3.5.1.min.js') }}"></script>

    <!--bootstrap Popper JS -->
    <script src="{{asset('assets/front/js/popper.min.js') }}"></script>

    <!--bootstrap script -->
    <script src="{{asset('assets/front/js/bootstrap.min.js') }}"></script>

    <!-- toastr  -->
    <script src="{{asset('assets/front/js/toastr.js')}}"></script>

    <!-- custom -->
    <script src="{{asset('assets/front/js/custom.js?v=2.1.2')}}"></script>
 
    <!-- owl carousel -->
    <script src="{{asset('assets/front/js/owl.carousel.min.js') }}"></script>
  
    <!-- main.js -->
    <script src="{{asset('assets/front/js/main.js?v=2.1.2') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




@yield('js')

</body>

</html>
