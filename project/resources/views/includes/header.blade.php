

<!-- header Desktop -->
<section style="width: 100%;float: right;">
    <!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <style>
        @font-face {
            font-family: 'samim';

            src: url('/fonts/Samim.ttf') format('truetype');

        url('/fonts/Samim-Bold.eot?#iefix') format('embedded-opentype');

        }
        body, button, input , span ,a {
            font-family: samim;
            font-size: 13px ;
            font-weight: 400;
        }
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        .navbar {min-height: 60px !important;padding-top:49px!important;border:none !important;margin-bottom:0!important;background-color: #fff !important;}
        .me-auto {margin-right:0 !important;}
        .navbar-toggler{margin-top: 10px;margin-right: 10px;}
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 1rem !important;
            padding-left: 1rem !important;
        }
    </style>

    <style>
        .header{width: 100%;float: right;height: 94px;border-bottom: 1px solid rgba(0,0,0,0.12);}
        .logo{width:20%;height:93px;float: right;}
        .basket{ margin-top:50px;float:left;margin-left:2%;width: 85px;height:35px;background: #89cecb;border-radius:60px;}
        .line1{float:left;height: 93px;width:1px;margin-left:2%;background: rgba(0,0,0,0.12);}
        .line2{float: right;width: 100%;height: 1px;background: rgba(0,0,0,0.12);}
        .login{float:left;min-width:50px;margin-top: 50px;}
        .logout{float:left;min-width:50px;margin-top: 55px;margin-left: 10px;}

        .basket1{margin-top: 7.5px;float:left;width: 85px;height:35px;background: #89cecb;border-radius:60px;}
        .login1{float:left;min-width:50px;margin-top: 7.5px;}
        .logout1{float:left;min-width:50px;margin-top: 8px;}
        .navbar-expand-lg{float: right;width: 60%;}
        .nav-link{font-size: 14.5px !important;}

        @media (min-width:0px) and (max-width:991.99px)
        {
            .logo{display:none;}
            .line1{display:none;}
            .line2{display:none;}
            .basket{display:none;}
            .login{display:none;}
            .logout{display:none;}
            .navbar{padding-top: 0!important;border:1px solid #dedede !important;}
            .navbar-expand-lg{width: 100%;}
        }
        @media (min-width:991px)
        {
            .basket1{display:none;}
            .login1{display:none;}
            .logout1{display:none;}
        }
    </style>





    <body class="antialiased">


    <a href="{{route('front.index')}}">
        <img class="logo" src="{{asset('/assets/images/zho/zho.png')}}" >
    </a>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="float: right;">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="basket1">

            <span style="float: right;color: white;margin-top: 9px;margin-right: 9px;">
                 {{isset(Session::get('cart')->items) ? count(Session::get('cart')->items) : 0}}
            </span>
                <span style="float: right;color: white;margin-top: 9px;margin-right: 3px;">
                مورد
            </span>
                <img src="{{asset('/assets/images/zho/basket1.png')}}"  style="height: 25px;float: left;width: 20px;margin-left: 10px;margin-top: 5px;" alt="" class="mb-n2 position-relative header__desktop--icon--cart">
                <div  class="cart-items">
                    @include('load.cart')
                </div>
            </div>

            @auth
                <div class="logout1">
                    <a  href="{{route('user-logout')}}" >
                        <img src="{{asset('/assets/images/zho/logout.png')}}" class="textedu1-6 img-responsive" style="width:22px;margin-top: 2px;" alt="">
                    </a>
                    <a href="{{route('user-dashboard')}}">
                        <img src="{{asset('/assets/images/zho/dashboard.png')}}" class="textedu1-6 img-responsive" style="width:27px;margin-right: 5px;" alt="">
                    </a>
                </div>
            @endauth
            @guest
                <div class="login1">
                    <a  href="{{route('user.login')}}">
                        <img src="{{asset('/assets/images/zho/login3.png')}}" class="textedu1-6 img-responsive" style="margin-top: 3px;width:30px;" alt="">
                    </a>
                </div>
            @endguest



            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-right: 0!important;">

                    @foreach($featured_categories as $category)

                        @if(count($category->subs) <= 0)

                            <li class="nav-item">
                                <a href="{{ route('front.category',$category->slug) }}"  class="nav-link" >{{ $category->name }}</a>
                            </li>

                        @endif

                        @if(count($category->subs) > 0)

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="{{ route('front.category',$category->slug) }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ $category->name }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @foreach($category->subs as $subcat)
                                        <li>
                                            <a class="dropdown-item" href="{{ route('front.category',['slug1' => $subcat->category->slug, 'slug2' => $subcat->slug]) }}">{{$subcat->name}}</a>

                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">


                                            @foreach ($category->attributes as $key => $attr)
                                                @if (!empty($attr->attribute_options))
                                                    @foreach ($attr->attribute_options as $key => $option)
                                                        <a href="{{ route('front.category',['slug1' => $subcat->category->slug, 'slug2' => $subcat->slug]) }}?{{$attr->input_name}}[]={{$option->name}}" class="text-decoration-none menu__desktop--subtext text__black">{{$option->name}}</a>
                                                    @endforeach
                                                @endif
                                            @endforeach


                                            @foreach ($subcat->attributes as $key => $attr)
                                                @if (!empty($attr->attribute_options))
                                                    @foreach ($attr->attribute_options as $key => $option)
                                                        <a href="{{ route('front.category',['slug1' => $subcat->category->slug, 'slug2' => $subcat->slug]) }}?{{$attr->input_name}}[]={{$option->name}}" class="text-decoration-none menu__desktop--subtext text__black">{{$option->name}}</a>
                                                    @endforeach
                                                @endif
                                            @endforeach

                                            </ul>

                                        </li>
                                      <!--
                                       <li><hr class="dropdown-divider"></li>
                                       !-->


                                        @endforeach
                                    </ul>
                                </li>
                        @endif

                     @endforeach

                </ul>
            </div>
        </div>
    </nav>


    <div class="basket">

            <span style="float: right;color: white;margin-top: 9px;margin-right: 9px;">
                      {{isset(Session::get('cart')->items) ? count(Session::get('cart')->items) : 0}}
            </span>
        <span style="float: right;color: white;margin-top: 9px;margin-right: 3px;">
                مورد
            </span>
        <img src="{{asset('/assets/images/zho/basket1.png')}}"  style="height: 25px;float: left;width: 20px;margin-left: 10px;margin-top: 5px;" alt="" class="mb-n2 position-relative header__desktop--icon--cart">
        <div  class="cart-items">
            @include('load.cart')
        </div>

    </div>

    <div class="line1"></div>


    @auth
        <div class="logout">
            <a  href="{{route('user-logout')}}" >
                <img src="{{asset('/assets/images/zho/logout.png')}}" class="textedu1-6 img-responsive" style="width:22px;margin-top: 2px;" alt="">
            </a>
            <a href="{{route('user-dashboard')}}">
                <img src="{{asset('/assets/images/zho/dashboard.png')}}" class="textedu1-6 img-responsive" style="width:27px;margin-right: 5px;" alt="">
            </a>
        </div>
    @endauth
    @guest
        <div class="login">
            <a  href="{{route('user.login')}}" >
                <img src="{{asset('/assets/images/zho/login3.png')}}" class="textedu1-6 img-responsive" style="margin-top: 3px;width:30px;" alt="">
            </a>
        </div>
    @endguest


    <div class="line2"></div>


    @include('includes.social-search-box')



    </body>
    </html>
</section>


