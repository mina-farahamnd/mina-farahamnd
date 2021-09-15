<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}">
    <!-- css  -->
    <link rel="stylesheet" href="{{asset('assets/front/css/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/rtl/home-page.css')}}">
    @yield('css')
    
    <title>اسم سایت @yield('title') </title>
   
</head>


<body>

<!-- Navigation -->
@include('includes.header')

<!-- Page Content -->
@yield('content')

<!-- Footer -->
@include('includes.footer')

<script type="text/javascript">
    var mainurl = "{{url('/')}}";
</script>
<!-- jQuery library -->
<script src="{{asset('assets/front/js/jquery.js')}}"></script>

<!-- Popper JS -->
<script src="{{asset('assets/front/js/popper.min.js')}}"></script>

<script src="{{asset('assets/front/js/toastr.js')}}"></script>

<!-- script -->
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/front/js/home-page.js')}}"></script>

@yield('js')

</body>

</html>
