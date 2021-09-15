@extends('layouts.front')

@section('content')




    <div style="width:98%;margin-right:1%;float: right;">

        <section class="new__pruduction mt-5">
            <div class="container-fluid">
                <div class="row mt-lg-0">
                    <div class="col-6 col-lg-3 px-0  new__pruduction--col">
                        @foreach ($last_products->slice(2,3) as $prod)
                            <div class="card d-lg-none w-100 border-0 new__pruduction--picture new__pruduction--card">
                                <div class="position-relative index__original">
                                    <a href="{{ route('front.product', $prod->slug) }}" class="">
                                        <img src="{{ $prod->photo ? asset('assets/images/products/'.$prod->photo):asset('assets/images/noimage.png') }}" alt="" class="{{$loop->iteration == 1 ? 'new__pruduction--picture--up index__overlay--information--up' : 'new__pruduction--picture--down index__overlay--information--down'}}">

                                        <div class="index__overlay">
                                            <div class="index__overlay--gray"></div>
                                            <div class="px-2 text-right index__overlay--information new__pruduction--picture--information"></div>
                                            <div class="card-body index__overlay--body px-4">
                                                <h5 class="text-white text__iranyekan--bold--ennum">{{$prod->showName()}}</h5>
                                                <span class="text-white text__large d-block">{{$prod->category->name}}</span>
                                                <div class="d-inline-block px-3 py-2 mt-3 index__overlay--price">
                                                    <div class="d-flex align-items-center px-2 py-1">
                                                        <span class="ml-3 text__medium text__iranyekan--regular">قیمت کالا:</span>
                                                        <div class="d-flex flex-row-reverse position-relative">
                                                            <span class="text__large text__number">{{number_format($prod->price)}}</span>
                                                            <span class="ml-2 text__large">RL</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <!--                                <div class="d-none d-lg-inline-block new__pruduction&#45;&#45;tag" id="index-tag">
                                                                        <span class="text-white text__small p-2">new</span>
                                                                    </div>
                                                                    <div class="d-block d-lg-none px-3 px-sm-4 py-2 d-inline-block discount__tag new__pruduction&#45;&#45;discount&#45;&#45;tag" id="discount-tag">
                                                                        <span>NEW</span>
                                                                    </div>-->
                                    <div class="card-img-overlay ml-3 new__pruduction--overlay" id="index-img-overlay">
                                        {{-- <div class="d-none d-lg-inline-block new__pruduction--tag" id="index-tag">
                                            <span class="text-white text__small p-2">new</span>
                                        </div>
                                        <div class="d-block d-lg-none px-3 px-sm-4 py-2 d-inline-block discount__tag new__pruduction--discount--tag" id="discount-tag">
                                            <span>NEW</span>
                                        </div> --}}
                                        <div class="position-relative">
                                            <div class="text-left new__pruduction--tag--text">
                                                <h6 class="card-text text-white text__iranyekan--bold--ennum">{{$prod->showName()}}</h6>
                                                <span class="card-text text-white text__medium text__iranyekan--regular">{{$prod->category->name}}</span>
                                            </div>
                                        </div>

                                    <!--                                    <div class="px-3 d-inline-block favorites__cart">
                                        <div class="d-flex">
                                            <a href="javascript:;" class="text-decoration-none add-to-wish"  data-href="{{ route('user-wishlist-add',$prod->id) }}">
                                                <img src="./assets/front/icon/heart-white.svg" alt="" class="my-2 ml-2 favorites__cart&#45;&#45;img">
                                            </a>
                                            <a href="" class="text-decoration-none">
                                                <img src="./assets/front/icon/cart.svg" alt="" class="my-2 favorites__cart&#45;&#45;img">
                                            </a>
                                        </div>
                                    </div>-->
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        {{--@if($ps->small_banner == 1)
                        <!-- Banner Area One Start -->
                            <section class="banner-section">
                                <div class="container">
                                    @foreach($top_small_banners->chunk(2) as $chunk)
                                        <div class="row">
                                            @foreach($chunk as $img)
                                                <div class="col-lg-6 remove-padding">
                                                    <div class="left">
                                                        <a class="banner-effect" href="{{ $img->link }}" target="_blank">
                                                            <img src="{{asset('assets/images/banners/'.$img->photo)}}" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                            <!-- Banner Area One Start -->
                        @endif--}}

                            <?php
                            $x=0;
                            ?>
                        @if($ps->small_banner == 1)
                            @foreach($top_small_banners->chunk(2) as $chunk)
                                @foreach($chunk as $img)
                                    @if($x<2)
                                            <?php
                                            $x=$x+1;
                                            ?>
                                        @if($loop->iteration ==1)
                                                <div class="card w-100 border-0 text-center new__pruduction--card pl-4 card-same-height">
                                                    <div class="card-body new__pruduction--lottory position-relative">
                                                        <div class="new__pruduction--lottory--responsive">
                                                            <a href="{{ $img->link }}">
                                                                <img src="{{asset('assets/images/banners/'.$img->photo)}}" alt="lottery">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="card d-none d-lg-flex w-100 border-0 new__pruduction--card new__pruduction--card--delivery pl-4 card-same-height">
                                                    <div class="card-body new__pruduction--delivery position-relative">
                                                        <div class="new__pruduction--delivery--responsive">
                                                            <a href="{{ $img->link }}">
                                                                <img src="{{asset('assets/images/banners/'.$img->photo)}}" alt="free delivery">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                     @endif
                                @endforeach
                            @endforeach
                        @endif

                        {{-- <div class="card w-100 border-0 text-center new__pruduction--card pl-4 card-same-height">
                             <div class="card-body new__pruduction--lottory position-relative">
                                 <div class="new__pruduction--lottory--responsive">
                                     <div class="">
                                         <img src="./assets/front/icon/lottery.svg" alt="lottery">
                                     </div>

                                     <div class="position-relative">
                                         <div class="px-3 new__pruduction--lottory--text">
                                             <span class="text-white text__large text__iranyekan--bold">شرکت در قرعه کشی</span>
                                             <span class="text-white text__medium text__iranyekan--light">ویژه مهرماه</span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="card d-none d-lg-flex w-100 border-0 new__pruduction--card new__pruduction--card--delivery pl-4 card-same-height">
                             <div class="card-body new__pruduction--delivery position-relative">
                                 <div class="new__pruduction--delivery--responsive">
                                     <div>
                                         <img src="./assets/front/icon/free delivery.svg" alt="free delivery">
                                     </div>

                                     <div>
                                         <h5 class="text-white new__pruduction--delivery--responsive--title text__iranyekan--bold">ارسال رایگان به <br> سراسر ایران</h5>
                                         <span class="text-white new__pruduction--delivery--responsive--text1 text__iranyekan--light">ارسال رایگان مخصوص خریدهای بالای 100 هزار تومان می باشد.</span>
                                         <span class="d-block text-white mt-3 new__pruduction--delivery--responsive--text2 text__iranyekan--regular">فروشگاه اینترنتی آکام پارس</span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                    --}}
                    </div>


                    <div class="col-6 col-lg-3 new__pruduction--col px-0 ">

                        @if (!empty($last_products->slice(0,2)))
                            @foreach ($last_products->slice(0,2) as $prod)
                                <div class="card w-100 border-0 new__pruduction--picture new__pruduction--card">
                                    <div class="position-relative index__original">
                                        <a href="{{ route('front.product', $prod->slug) }}" class="">
                                            <img src="{{ $prod->photo ? asset('assets/images/products/'.$prod->photo):asset('assets/images/noimage.png') }}" alt="" class="{{$loop->iteration == 1 ? 'new__pruduction--picture--up index__overlay--information--up' : 'new__pruduction--picture--down index__overlay--information--down'}}">

                                            <div class="index__overlay">
                                                <div class="index__overlay--gray"></div>
                                                <div class="px-2 text-right index__overlay--information new__pruduction--picture--information"></div>
                                                <div class="card-body index__overlay--body px-4">
                                                    <h5 class="text-white text__iranyekan--bold--ennum">{{$prod->showName()}}</h5>
                                                    <span class="text-white text__large d-block">{{$prod->category->name}}</span>
                                                    <div class="d-inline-block px-3 py-2 mt-3 index__overlay--price">
                                                        <div class="d-flex align-items-center px-2 py-1">









                                                            <span class="ml-3 text__medium text__iranyekan--regular">قیمت کالا:</span>
                                                            <div class="d-flex flex-row-reverse position-relative">
                                                                <span class="text__large text__number text__iranyekan--regular">{{number_format($prod->price)}}</span>
                                                                <span class="ml-2 text__large text__iranyekan--regular">RL</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--                                <div class="d-none d-lg-inline-block new__pruduction&#45;&#45;tag" id="index-tag">
                                                                            <span class="text-white text__small p-2">new</span>
                                                                        </div>
                                                                        <div class="d-block d-lg-none px-3 px-sm-4 py-2 d-inline-block discount__tag new__pruduction&#45;&#45;discount&#45;&#45;tag" id="discount-tag">
                                                                            <span>NEW</span>
                                                                        </div>-->
                                        <div class="card-img-overlay ml-3 new__pruduction--overlay" id="index-img-overlay">
                                            {{-- <div class="d-none d-lg-inline-block new__pruduction--tag" id="index-tag">
                                                <span class="text-white text__small p-2">new</span>
                                            </div> --}}
                                            {{-- <div class="d-block d-lg-none px-3 px-sm-4 py-2 d-inline-block discount__tag new__pruduction--discount--tag" id="discount-tag">
                                                <span>NEW</span>
                                            </div> --}}
                                            <div class="">
                                                <div class="text-left new__pruduction--tag--text">
                                                    <h6 class="card-text text-white text__iranyekan--bold--ennum">{{$prod->showName()}}</h6>
                                                    <span class="card-text text-white text__medium text__iranyekan--regular">{{$prod->category->name}}</span>
                                                </div>
                                            </div>

                                        <!--                                    <div class="px-3 d-inline-block favorites__cart">
                                        <div class="d-flex">
                                            <a href="javascript:;" class="text-decoration-none add-to-wish"  data-href="{{ route('user-wishlist-add',$prod->id) }}">
                                                <img src="./assets/front/icon/heart-white.svg" alt="" class="my-2 ml-2 favorites__cart&#45;&#45;img">
                                            </a>
                                            <a href="" class="text-decoration-none">
                                                <img src="./assets/front/icon/cart.svg" alt="" class="my-2 favorites__cart&#45;&#45;img">
                                            </a>
                                        </div>
                                    </div>-->
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="col-lg-6 px-0 d-none d-lg-flex">
                        <div class="card pr-3 border-0 w-100">
                            <div id="pruduction-carousel" class="carousel slide new__pruduction--carousel" data-ride="carousel">
                                <!--                        <ol class="carousel-indicators new__pruduction&#45;&#45;carousel&#45;&#45;indicators">
                                                            <li data-target="#pruduction-carousel" data-slide-to="0" class="active"></li>
                                                            <li data-target="#pruduction-carousel" data-slide-to="1"></li>
                                                            <li data-target="#pruduction-carousel" data-slide-to="2"></li>
                                                        </ol>-->
                                <div class="carousel-inner new__pruduction--carousel--inner">
                                    @if(!empty($slider_products))
                                        @foreach (($slider_products) as $prod)
                                            <div class="carousel-item new__pruduction--carousel--item {{$loop->iteration == 1 ? 'active' : ''}}">
                                                <a href="{{ route('front.product', $prod->slug) }}">
                                                    <img class="d-block w-100" src="{{ $prod->photo ? asset('assets/images/products/'.$prod->photo):asset('assets/images/noimage.png') }}" alt="First slide">
                                                    <div class="carousel-caption new__pruduction--carousel--caption">
                                                        <div class="text-left mt-n2">
                                                            <h6 class="text-white text__iranyekan--bold--ennum">{{$prod->showName()}}</h6>
                                                            <span class="d-block text-white text__medium text__iranyekan--light">{{$prod->category->name}}</span>
                                                            <div class="d-inline-block">
                                                                <div class="d-flex justify-content-end align-items-center px-3 py-2 my-3 new__pruduction--carousel--caption--internal">
                                                                    <span class="text__medium text__iranyekan--bold">قیمت کالا:</span>
                                                                    <div class="d-flex flex-row-reverse ml-n2 mr-2">
                                                                        <span class="text__large mx-2 text__number ">{{number_format($prod->price)}}</span>
                                                                        <span class="text__large text-number-mark">RL</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @if($prod->tags)
                                                                <span class="text-white font-weight-bold d-block text__medium">{{--{{implode(' , ',$prod->tags)}}--}}</span>
                                                            @endif
                                                        </div>

                                                    <!--                                            <div class="text-right mb-1 mr-3">
                                                <div class="px-3 d-inline-block favorites__cart mt-2">
                                                    <div class="d-flex">
                                                        <a href="javascript:;" class="text-decoration-none add-to-wish"  data-href="{{ route('user-wishlist-add',$prod->id) }}">
                                                            <img src="./assets/front/icon/heart-white.svg" alt="" class="my-2 ml-2 favorites__cart&#45;&#45;img">
                                                        </a>
                                                        <a href="" class="text-decoration-none">
                                                            <img src="./assets/front/icon/cart.svg" alt="" class="my-2 favorites__cart&#45;&#45;img">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>-->
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <a class="carousel-control-prev" href="#pruduction-carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#pruduction-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('front.index.advertising')

        @include('front.index.all_products')

        @include('front.index.small_banners')

        @include('front.index.best_sellers_products')

        @include('front.index.newest-products')

        @include('front.index.brand')

        <section class="search">
            @isset($large_banner)
                <div class="container-fluid">
                    <!--        <div class="row mb-3">
                                <div class="col-md-12 px-0 d-flex justify-content-between">
                                    <h6 class="font-weight-bold option__text&#45;&#45;fa">جستجوی آکام پارس</h6>
                                    <h6 class="font-weight-bold option__text&#45;&#45;en">AkamPars Search</h6>
                                </div>
                            </div>-->

                    <div class="row">
                        <div class="col-12 px-0 mt-3">
                            <a href="{{ $large_banner->link }}">
                                <div class="card border-0">
                                    <div class="search__img mt-3">
                                        <img src="{{ asset('assets/images/banners/'.$large_banner->photo)}}" alt="" class="card-img w-100">
                                    </div>
                                    <div class="search__overlay">
                                        <div class="search__overlay&#45;&#45;up">
                                            <div class="d-flex justify-content-between">
                                                <!--                                <div class="search__icon">
                                                                                    <img src="./assets/front/icon/search.svg" alt="">
                                                                                </div>
                                                                                <div class="text-left search__information">
                                                                                    <img src="./assets/front/icon/posted-logo.svg" alt="">
                                                                                    <span class="d-lg-block d-none text__iranyekan&#45;&#45;regular">جدیدترین ها، پرفروش ترین ها</span>
                                                                                    <span class="d-block text__iranyekan&#45;&#45;regular">پربیننده ترین های آکام پارس</span>
                                                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="search__overlay&#45;&#45;down">
                                            <div class="search__introduction">
                                            <!--                                <h5 class="text__iranyekan&#45;&#45;bold">
                                    <a href="{{ $large_banner->link }}" class="text-decoration-none text__iranyekan&#45;&#45;bold&#45;&#45;ennum text__black"></a>
                                </h5>-->
                                                {{--                                <span class="d-block text__medium text__iranyekan&#45;&#45;light">{{$prod->category->name}}</span>--}}
                                                {{--@if($prod->tags)
                                                    <span class="text__medium text__iranyekan&#45;&#45;light">{{implode(' , ',$prod->tags)}}</span>
                                                @endif--}}
                                            </div>
                                            {{--                            <div class="d-flex justify-content-between py-2 px-3 search__price">--}}
                                            {{--                                <span class="pr-1 text__medium text__iranyekan&#45;&#45;bold">قیمت کالا: </span>--}}
                                            {{--                                <span class="text__medium mr-2 text__number">{{number_format($prod->price)}}</span>--}}
                                            {{--                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endisset
        </section>

    </div>

@endsection

{{-- @section('js')
    <script>

        $(document).ready(function () {
            var cw = $('.card-same-height').width();
            $('.card-same-height').css({'height':cw+'px'});
            $('body').removeClass('loading');
        });
    </script>


@endsection --}}
