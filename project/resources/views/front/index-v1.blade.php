@extends('layouts.front')

@section('css')
<link rel="stylesheet" href="{{asset('assets/front/css/rtl/index.css')}}">
<!-- Stylesheets -->
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
{{-- <link rel="stylesheet" href="assets/front/Owl-carousle/css/docs.theme.min.css"> --}}

 <!-- Owl Stylesheets -->
<link rel="stylesheet" href="{{asset('assets/front/Owl-carousle/owlcarousel/assets/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/front/Owl-carousle/owlcarousel/assets/owl.theme.default.min.css')}}">
@endsection

@section('content')

<div class="main container-fluid px-5">
    <!-- main-banner -->
            <div class="row main-banner mx-md-5 mt-3 mt-lg-4">
                <div class="col-12">
                    <div class="row d-flex mt-4 mx-md-2 mx-xl-5">
                        
                        <div class="col-5 col-md-3 main-banner-gift d-flex">
    <!-- main-banner-gift-discount -->
                            <div>
                                <img src="./assets/front/images/hahoot/gift box.svg" alt="Gift Box" class="main-banner-gift-img mr-2 mr-lg-3">
                            </div>
                            
                            <div class="mt-md-4 mt-lg-5">
                                <span class="main-banner-gift-discount text-white font-weight-bolder mt-4">کد تخفیف</span>
                                <div class=" mt-2">
                                    <a href="#" class="text-decoration-none main-banner-join font-weight-bolder">JOIN US!</a>
                                </div>
                            </div>
                        </div>
    
    <!--*********** for desktop and table there is not this col in mode mobile***********-->
                        <div class="col-md-5 d-none d-md-block mt-md-3 mt-lg-5 px-0">
                            <div class="d-md-flex flex-row-reverse justify-content-start main-banner-dl-email-div">
                                <div class="main-dl-banner-enter-email text-white mt-md-2">ایمیل خود را وارد کنید</div>
                                <div class="main-banner-dl-email border-0 border-white rounded-0 mr-3">
                                
                                    <form action="#" target="_blank" method="#" class="form-group">
                
                                        <input type="email" class="main-banner-dl-email-input form-control border-0 rounded-0 shadow-none bg-white">  
                
                                        <div class="d-flex align-items-center">
                                            <button type="submit" class="btn main-banner-dl-email-btn border-0 rounded-0 mt-n5 shadow-none"> تایید
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
    
                            <div class="main-dl-banner-brand-search d-none d-md-flex flex-row-reverse justify-content-start text-white font-weight-bolder">
                                    در هاهوت عضو شوید و محصول یا برند مورد علاقه خود را جستجو کنید
                            </div>
                        </div>
    <!-- main-banner-discount -->
                        <div class="col-7 col-md-4 main-banner-discount mt-md-3">
                            <div class="main-banner-discount-first-purchase font-weight-bolder">لذت تجربه اولین خرید</div>
                            <div class="mt-1">
                                <a href="#" class="main-banner-discount-link text-decoration-none text-white font-weight-bolder">با 35 هزار تومان کد تخفیف</a>
                            </div>   
                        </div>
                    </div>
                </div>
    <!-- main-banner-email -->
                <div class="col-12 d-md-none">
                    <div class="main-banner-email footer-dl-email border border-white rounded-0 ">
                        <form action="#" target="_blank" method="#" class="form-group">
                
                            <input type="email" class="main-banner-email-input form-control border-0 rounded-0 shadow-none" placeholder="آدرس ایمیل خود را وارد کنید">  
    
                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn main-banner-email-btn border-0 rounded-0 btn-outline-dark mt-n5"> تایید   
                                </button>
                                <!-- <span class="main-banner-email-confirmation-vl text-danger mx-2 "></span> -->
                            </div>
                        </form>
                    </div>  
                </div>
    
            </div>
    
    <!-- /* /////////////////////***************تبلیغات بعد از بنر srart**********/ -->
    <!--/////////////////////////////////////////////////////// for mobile and tablet and desktop advertising -five-part -start ////////////////////////////////// -->
            <div class="row mt-5 mx-md-5">
                <div class="col-md-6 d-none d-md-flex pl-0">
                    <div class="card border-0 rounded-0  w-100  py-0 advertising-five-part-all">
                        @if (!empty($last_products->slice(0,1)))
                        @foreach ($last_products->slice(0,1) as $prod)
                        <a href="{{ route('front.product', $prod->slug) }}">
                        <img src="{{ $prod->photo ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" alt="Magnetic-charge" class="card-img-dl w-100">
                        <div class="advertising-five-part-all-tag-discount position-absolute d-flex justify-content-center align-items-center"> 
                            <span class="font-weight-bold text-white">NEW</span>
                        </div>
                        <div class="overlay position-absolute advertising-five-part-all">
                            <div class="card-body px-0">

                                <h5 class="text-white font-weight-bold px-3">{{$prod->showName()}}</h5>
    
                                <span class="font-weight-bold text-white px-3">{{$prod->category->name}}</span>
    
                                <div class="d-flex justify-content-start advertising-five-part mt-3 mb-n2 px-md-3">
                                    <a href="#" target="_blank" class="text-decoration-none text-white border border-bottom-0 border-left-0 border-top-0 pr-2">
                                        <span>سبد خرید</span>
                                        <img src="./assets/front/images/hahoot/my shopping cart.svg" alt="My Shopping Cart">    
                                    </a>
                                    <a href="#" target="_blank" class="text-decoration-none text-white pl-2">
                                        <span>هاهوت من</span>
                                        <img src="./assets/front/images/hahoot/my hahoot.svg" alt="My Hahoot">    
                                    </a>
                                </div>
                            </div>     
                        </div>
                        </a>
                        @endforeach
                        @endif
                    </div>
                </div>
    
                <div class="col-md-3 col-6 pl-0 pr-0 pr-md-4">
                    @if (!empty($last_products->slice(1)))
                    @foreach ($last_products->slice(1) as $prod)
                    <div class="card-deck d-flex {{$loop->iteration == 2 ? 'mt-n2 mt-md-3' : ''}}">
                        <div class="card w-100 border-0 rounded-0 mr-md-2 position-relative">
                            
                            <div class="advertising-five-part-all-tag-discount position-absolute d-flex justify-content-center align-items-center"> 
                                <span class="font-weight-bold text-white">NEW</span>
                            </div>
                            <a href="{{ route('front.product', $prod->slug) }}">
                            <img src="{{ $prod->photo ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" alt="girl" class="card-img-m d-md-block w-100" >
                            </a>
                            <div class="overlay position-absolute advertising-five-part-all">
                                <div class="card-body px-0">
                                    <h5 class="text-white font-weight-bold px-3">{{$prod->showName()}}</h5>
    
                                    <span class="font-weight-bold text-white px-3">{{$prod->category->name}}</span>
    
                                    <div class="d-flex justify-content-start advertising-five-part mt-3 mb-n2 px-md-3">
                                        <a href="#" target="_blank" class="text-decoration-none text-white border border-bottom-0 border-left-0 border-top-0 pr-2">
                                            <span>سبد خرید</span>
                                            <img src="./assets/front/images/hahoot/my shopping cart.svg" alt="My Shopping Cart">    
                                        </a>
                                        <a href="#" target="_blank" class="text-decoration-none text-white pl-2">
                                            <span>هاهوت من</span>
                                            <img src="./assets/front/images/hahoot/my hahoot.svg" alt="My Hahoot">    
                                        </a>
                                    </div>
                                </div>     
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif         
                </div> 
                <div class="col-md-3 col-6  pr-0">
                    <div class="card-deck d-flex">
                        <div class="card  border-0 rounded-0 ml-md-2 Lottery">
                            <div class="card-body card-img-m-body px-2">
                                <img src="{{asset('assets/front/images/hahoot/Lottery.svg')}}" alt="Lottery"> 
                                <div class="mt-4 ">
                                    <span class="text-white font-weight-bold">شرکت در قرعه کشی</span>
                                    <span class="text-white">ویژه مهرماه</span>
                                </div>
    
                            </div>
                        </div>
                    </div>
    
                    <div class="card-deck d-flex mt-n2 mt-md-3">    
                        <div class="card  border-0 rounded-0 ml-md-2 ">
                            <div class="card-body advertising-five-part-all-delivery d-md-flex flex-column">
                                <div class="card-iamge-overlay text-right">
                                    <img src="./assets/front/images/hahoot/free delivery.svg" alt="free delivery" class="mt-n3">
                                    <div class="text-white advertising-five-part-all-delivery-text mt-lg-4 mt-xl-5">
                                        <h5 >ارسال رایگان به سراسر ایران</h5>
                                        <span>ارسال رایگان مخصوص خریدهای بالای 100 هزار تومان میباشد</span>
                                        <h6>فروشگاه اینترنتی هاهوت</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>   

               
            </div>
            
            
    
    <!--/////////////////////////////////////////////////////// for mobile advertising -five-part -end ////////////////////////////////// -->
    <!-- دسته بندی محصولات برتر و پربیننده ترین های هاهوت  start--- only desktop and laptop-->
                <div class="row top-products mx-md-5 mt-5">
                    <div class="col-md-12 py-md-3 mx-md-2 py-lg-4 mx-lg-4 py-xl-5 mx-xl-5 d-none d-md-flex justify-content-xl-center">
                        @if (!empty($top_categories))
                            @foreach ($top_categories as $item)
                                <a href="{{route('front.category',$item->slug)}}" target="_blank" class="text-decoration-none mr-md-3 mr-lg-4 mr-xl-5">
                                    <img src="{{ $item->photo ? asset('assets/images/categories/' . $item->photo):asset('assets/images/noimage.png') }}" alt="Gradening">
                                    <h5 class="text-white text-center mt-md-3 font-weight-bold">{{Illuminate\Support\Str::ucfirst($item->name)}}</h5>
                                </a>
                            @endforeach                       
                        @endif
                        
    
    
                        <div class="top-products-vl d-md-flex justify-content-center align-items-center mx-md-4"></div>
                        <div class="d-none d-md-block pt-3 pt-lg-5 text-lg-center">
                            <h3 class="mb-2 font-weight-bold text-white">دسته بندی محصولات برتر و </h3>
                            <span class="text-white">پربیننده ترین های هاهوت</span>
                        </div>
                    </div>
                    
                </div>
    <!-- دسته بندی محصولات برتر و پربیننده ترین های هاهوت  end-->
    
    <!--///////////////////////////////////////////////////////hahoot-option پیشنهاد هاهوت start////////////////////////////////// -->
    
                
    
                

    
    <!--///////////////////////////////////////////////////////for mobile  تخفیف هاهوت start////////////////////////////////// -->      
               
<!--hahoot-sale- Carousel for mobile -->
                @if (!empty($discount_products))
                    <div class="row mx-md-5" id="hahoot-discount">
                        <div class="col-12 d-flex justify-content-between px-0 my-3 hahoot-sale">
                            <div class="font-weight-bold text-muted">Hahoot Sale</div>
                            <div class="font-weight-bold">تخفیف هاهوت</div>
                        </div>
                        <div class="col-12 px-0">
                            <div class="owl-carousel owl-theme hahoot-discount-carousel">
                                @foreach ($discount_products as $prod)
                                <div class="item">
                                    <div class="card general-image-all border-0">
                                        <div class="general-image-all-overlay position-relative">
                                            <img src="{{ $prod->photo ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" alt="leather bags" class="card-img-top border ">
                                        </div>
                                        <div class="general-image-all-myhahoot-card position-absolute d-flex justify-content-around w-100 py-2 bg-primary">
                                            <div class="d-flex justify-content-between">
                                                <a href="#" target="_blank" class="text-decoration-none text-white d-flex border border-bottom-0 border-left-0 border-top-0 mr-2">
                                                    <span class="mr-2">سبد خرید</span>
                                                    <img src="./assets/front/images/hahoot/my shopping cart.svg" alt="My Shopping Cart" class="mr-2">    
                                                </a>
                                                <a href="#" target="_blank" class="text-decoration-none text-white d-flex ">
                                                    <span class="mr-2">هاهوت من</span>
                                                    <img src="./assets/front/images/hahoot/my hahoot.svg" alt="My Hahoot">    
                                                </a>
                                            </div>   
                                        </div>
                                        
                                        <div class="general-image-all-tag-discount position-absolute text-center">
                                            <span class="text-white">{{(int)(100 - (($prod->price / $prod->previous_price) * 100))}} %</span>
                                        </div>
                                        <div class="card-header px-0 bg-white border-0 text-right">
                                            <h5 class="font-weight-bold product-title"><a href="{{ route('front.product', $prod->slug) }}" class="text-muted text-decoration-none">{{$prod->showName()}}</a></h5>
                                        </div>
                                        <div class="card-body px-0 general-image-body mt-n4 text-right">   
                                            <div class="d-flex justify-content-between"> 
                                                <div>
                                                    @if(!empty($prod->color))
                                                        @foreach ($prod->color as $color)
                                                            <span style="background-color: {{$color}};width:1rem;height:1rem;" class="d-inline-block"></span>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <span>{{$prod->category->name}}</span>
                                            </div>
                                        </div>
                                        <div class="card-footer border py-1 px-2 bg-white general-image-footer d-flex align-items-center justify-content-between ">
                                            <p class="price-for-you-n mt-1">{{number_format($prod->previous_price)}} RL
                                                <div class="diagonel-line"></div>
                                            </p>
                                            <span class="mb-0 price-for-you-t">:قیمت کالا</span>
                                            
                                        </div>
                                        <div class="card-footer border border-top-0 py-1 px-2 bg-white general-image-footer  d-flex align-items-center  justify-content-between ">
                                            <p class="price-discount-n mt-1">{{number_format($prod->price)}} RL</p>
                                            <p class="mb-0 price-discount-t">:قیمت با تخفیف</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                @endif

    
    
    
<!--///////////////////////////////////////////////////////hahoot-option for mobile پیشنهاد هاهوت start////////////////////////////////// -->
                @if(!empty($feature_products->slice(2)))
                <div class="row mx-md-5">
                    <div class="col-12 d-flex justify-content-between px-0 my-3 hahoot-sale">
                        <div class="font-weight-bold text-muted">Hahoot Option</div>
                        <div class="font-weight-bold">پیشنهاد هاهوت</div>
                    </div>
                    <div class="col-12 px-0">
                        <div class="owl-carousel owl-theme option-one-carousel">
                            @foreach (($feature_products->slice(0,2)) as $prod)
                            <div class="item border">
                                <div class="card border-0 rounded-0">
                                        
                                    <div class="option-img-overlay position-relative">
                                        <img src="{{ $prod->photo ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" class="card-img-option-dl rounded-0 w-100" alt="bluetooth-speaker">
                                        <div class="overlay-test-option position-absolute"></div>
                                    </div>
                                    
                                    <div class="category-name position-absolute text-white d-flex align-items-star ml-2 mt-2">
                                        <div class="d-flex align-items-start">
                                            <h5 class="card-title font-weight-bold text-muted">{{$prod->category->name}}</h5>
                                        </div>
                                    </div>
                                    <div class="category-tags position-absolute text-white d-flex align-items-end ml-2">
                                        <div class="d-flex flex-column">
                                            <div class="">
                                                <h5 class="card-title font-weight-bold">{{$prod->showName()}}</h5>
                                                <h5 class="card-text mt-n2">{{implode(' , ',$prod->tags)}}</h5>
                                            </div>
                
                                            <div class="border-0 p-2 w-50 text-center price-option-hahoot mt-3">
                                                <h5 class="card-text text-white">{{number_format($prod->price)}} RL</h5>
                                            </div>
                
                                            <div class="category-cart-my-hahoot mt-4 d-flex justify-content-start ml-2 py-2">
                                                <a href="#" target="_blank" class="text-decoration-none text-white d-flex border border-bottom-0 border-left-0 border-top-0 mr-3">
                                                    <span class="mr-2">سبد خرید</span>
                                                    <img src="./assets/front/images/hahoot/my shopping cart.svg" alt="My Shopping Cart" class="mr-3">    
                                                </a>
                                                <a href="#" target="_blank" class="text-decoration-none text-white d-flex ">
                                                    <span class="mr-2">هاهوت من</span>
                                                    <img src="./assets/front/images/hahoot/my hahoot.svg" alt="My Hahoot">    
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                @if(!empty($feature_products->slice(2)))
                <div class="row mx-md-5 mt-3">
                    <div class="col-12 px-0">
                        <div class="owl-carousel owl-theme option-two-carousel">
                            @foreach ($feature_products->slice(2) as $prod)
                            <div class="item">
                                <div class="card general-image-all border-0">
                                    <div class="general-image-all-overlay position-relative">
                                        <img src="{{ $prod->photo ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" alt="device" class="card-img-top border w-100">
                                        <div class="overlay-test position-absolute"></div>
                                    </div>
                                    <div class="general-image-all-sale position-absolute d-flex justify-content-around w-100 py-2 bg-primary">
                                        <div class="d-flex justify-content-between">
                                            <a href="#" target="_blank" class="text-decoration-none text-white d-flex border border-bottom-0 border-left-0 border-top-0 mr-4">
                                                <span class="mr-2">سبد خرید</span>
                                                <img src="./assets/front/images/hahoot/my shopping cart.svg" alt="My Shopping Cart" class="mr-4">    
                                            </a>
                                            <a href="#" target="_blank" class="text-decoration-none text-white d-flex ">
                                                <span class="mr-2">هاهوت من</span>
                                                <img src="./assets/front/images/hahoot/my hahoot.svg" alt="My Hahoot">    
                                            </a>
                                        </div>   
                                    </div>
                                    
                                    <div class="card-header px-0 bg-white border-0 text-right">
                                        <h5 class="font-weight-bold product-title"><a href="{{ route('front.product', $prod->slug) }}" class="text-muted text-decoration-none">{{$prod->showName()}}</a></h5>
                                    </div>
                                    <div class="card-body px-0 general-image-body mt-n4 text-right">   
                                        <div class="d-flex justify-content-between"> 
                                            <div>
                                                @if(!empty($prod->color))
                                                    @foreach ($prod->color as $color)
                                                        <span style="background-color: {{$color}};width:1rem;height:1rem;" class="d-inline-block"></span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <span>{{$prod->category->name}}</span>
                                        </div>
                                        
                                    </div>
                                    <div class="card-footer border py-1 px-2 bg-white general-image-footer  d-flex justify-content-between align-items-center">
                                        <p class="mt-2 mb-1">{{number_format($prod->price)}} RL</p>
                                        <span class="mb-0">:قیمت کالا</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
    

<!--///////////////////////////////////////////////////////hahoot-option پیشنهاد هاهوت end////////////////////////////////// -->

    
    
    
    <!--///////////////////////////////////////////////////////for desktop and laptop تخفیف هاهوت start////////////////////////////////// -->
    
                
    
    
    
    <!--///////////////////////////////////////////////////////for desktop and laptop تخفیف هاهوت end////////////////////////////////// -->
    
    
    
    
    
    <!-- /* /////////////////////***************تبلیغات بعد از بنر end**********/ -->
    
    
    
    <!-- /* خرید آسان و سریع  start*/ -->
            <div class="row main-easy-fast-shopping mx-md-5 text-center text-muted mt-5" id="main-easy-fast">
                <div class="col-12 d-flex justify-content-center justify-content-md-around border border-muted py-3">
                    <div class="ml-n3 mr-3">
                        <img src="./assets/front/images/hahoot/support.svg" alt="support">
                        <h6>پشتیبانی</h6>
                    </div>
                    <div class="mr-4">
                        <img src="./assets/front/images/hahoot/gift card.svg" alt="gift card">
                        <h6> کارت هدیه هاهوت</h6>
                    </div>
                    <div class="mr-4">
                        <img src="./assets/front/images/hahoot/Pay on the spot.svg" alt="Pay on the spot">
                        <h6>پرداخت در محل</h6>
                    </div>
                    <div class="mr-4">
                        <img src="./assets/front/images/hahoot/Guaranteed return.svg" alt="Guaranteed return">
                        <h6>7روز ضمانت برگشت</h6>
                    </div>
                    <div class="mr-n3 mr-md-n1">
                        <img src="./assets/front/images/hahoot/Express delivery.svg" alt="Express delivery">
                        <h6>تحویل اکسپرس</h6>
                    </div>
    <!--for desktop and table there is not in mode mobile***********-->
                    <div class="main-easy-fast-shopping-vl bg-muted d-none d-md-flex mx-3"></div>
                    <div class="d-none d-md-block pt-3 pt-lg-4">
                        <h3 class="mb-2 font-weight-bold">خرید آسان و سریع</h3>
                        <span>با اطمینان خرید کنید</span>
                    </div>
    <!--for desktop and table there is not in mode mobile***********-->
                </div>
    
            </div>
    <!-- /* خرید آسان و سریع  end*/ -->
    
    
    <!--///////////////////////////////////////////////////////for desktop and laptop hahoot-search جستجو هاهوت start////////////////////////////////// -->
    
            <?php $prod = $hot_products->first();?>
            @isset($prod)
            <div class="row mx-md-5" id="search-in-hahoot-dl">
                <div class="col-12 d-flex justify-content-between px-0 mt-5 mb-4 hahoot-sale">
                    <div class="font-weight-bold text-muted">Hahoot Search</div>
                    <div class="font-weight-bold">جستجو هاهوت</div>
                </div>
                <div class="col-12 px-0">
                    <div class="card search-of-hahoot-all">
                        <a href="{{ route('front.product', $prod->slug) }}">
                        <img src="{{ $prod->photo ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" alt="magnet-blue" class="w-100 search-of-hahoot-all-img">
                        
                        <div class="card-img-overlay d-flex justify-content-between align-items-start p-md-5 px-2">
                            
                            <div class="text-white">
                                <h5 class="card-title text-left font-weight-bold">Hahoot...</h5>
                                <p class="card-text">جدیدترین ها، پرفروش ترین ها
                                    <br>پربیننده ترین های هاهوت
                                </p>
                            </div>

                            <div class="text-white search-of-hahoot-all-Search text-right">
                                <img src="./assets/front/images/hahoot/search.svg" alt="Search">
                                <h5 class="card-title mt-1 font-weight-bold">هاهوت کنید</h5>
                                <p class="card-text mt-n2">تا کالای دلخواه خود را بیابید</p>
                            </div>
                        </div>
    
                        <div class="card-img-overlay d-flex justify-content-between align-items-end p-md-5 px-2 search-of-hahoot-all-information">
                            
                            <div class="advertising-price-for-you border border-light text-white text-center px-md-2 px-1 mb-4">
                                <p class="card-text">قیمت کالا: <span>{{number_format($prod->price)}}</span></p>
                            </div>
                            <div class="text-white text-right">
                                <h5 class="card-title font-weight-bold">{{$prod->showName()}}</h5>
                                <p class="card-text">{{$prod->category->name}}
                                    
                                </p>
                            </div>
                        </div>
                        </a>
                    </div>
    
                </div>
    
            </div>
    
            @endisset
            
    <!--///////////////////////////////////////////////////////for desktop and laptop hahoot-search جستجو هاهوت end////////////////////////////////// -->
        </div>

@endsection

@section('js')
    <script src="assets/front/Owl-carousle/vendors/jquery.min.js"></script>
    <script src="assets/front/Owl-carousle/owlcarousel/owl.carousel.js"></script>
    <script src="assets/front/Owl-carousle/vendors/highlight.js"></script>
    <script src="assets/front/Owl-carousle/js/app.js"></script>
    <script src="assets/front/js/index.js"></script>
@endsection