@extends('layouts.front')

@section('content')
    <section class="interest my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('/assets/front/icon/heart-green.svg') }}" alt="" class="interest__icon">
                        <h6 class="mr-3 text__green text__iranyekan--bold">محصولات دلخواه من</h6>
                    </div>
                    <div>
                        <h5 class="font-weight-bold text__gray d-none d-sm-inline-block">My Favorite Products</h5>
                    </div>
                </div>
            </div>
            @if($wishlists->isEmpty())
                {{--START wishlist: page-1 empty--}}
                <div class="row interest__empty">
                    <div class="col-12">
                        <div class="card border-0 interest__card">
                            <div class="mx-auto">
                                <div class="d-flex justify-content-center align-items-center mx-auto interest__cart">
                                    <img src="{{asset('assets/front/icon/interest.svg')}}" alt="">
                                </div>
                                <div class="mt-5">
                                    <p class="text__black text__medium">لیست محصولات دلخواه شما خالی است.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--END wishlist: page-1 empty--}}
            @else
                {{--START wishlist: page-2 --}}
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 mb-3 position-relative interest__picture">
                    @foreach($wishlists as $wishlist)
                        @if($loop->iteration == 2)
                            <div class="col">
                                    <div class="card border-0 interest__card">
                                        <div class="image__original">
                                            <div class="d-flex justify-content-center align-items-center interest__cart mx-auto">
                                                <img src="{{asset('assets/front/icon/interest.svg')}} " alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif
                        <div class="col text-center">
                            <a href="{{ route('front.product', $wishlist->product->slug) }}" class="card border-0 interest__card">
                                <div class="image__original">
                                    <img src="{{ $wishlist->product->photo ? asset('assets/images/thumbnails/'.$wishlist->product->thumbnail):asset('assets/images/noimage.png') }}" alt="" class="interest__img">
                                    <div class="image__overlay">     
                                        <div class="text-right image__overlay--information interest__information">
                                            
                                            {{-- <div class="card-body image__overlay--body">
                                                <span class="text-white d-block text__small">{{$wishlist->product->name}}</span>
                                                <div class=" d-inline-block">
                                                    <div class="d-flex justify-content-center mt-3 image__overlay--price">
                                                        <div class="d-flex align-items-center px-2 py-1">
                                                            <span class="ml-3 text__small">قیمت :</span>
                                                            <div class="d-flex flex-row-reverse position-relative">
                                                                <span class="text__small">{{$wishlist->product->price}}</span>
                                                                <span class="text__small">RL</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="image__overlay--body">
                                            <span class="text-white d-block text__small">{{$wishlist->product->name}}</span>
                                            <div class=" d-inline-block">
                                                <div class="d-flex justify-content-center mt-3 image__overlay--price">
                                                    <div class="d-flex align-items-center px-2 py-1">
                                                        <span class="ml-3 text__small">قیمت :</span>
                                                        <div class="d-flex flex-row-reverse position-relative">
                                                            <span class="text__small">{{$wishlist->product->price}}</span>
                                                            <span class="text__small">RL</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    <div class="position-absolute d-none d-xl-flex" style="right:-14.5rem; margin-top:22rem">
                        <div class="interest__scroll">                            
                            <span class="text__gray text__medium d-flex">
                                <i class="ion-minus mt-1 mx-2 text__gray text__medium"></i>
                                Scroll Your Favorits                                
                            </span>
                            <img src="{{asset('assets/front/icon/scroll-vertical.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                {{--END wishlist: page-2 --}}

            @endif


            <div class="row">
                <div class="col-md-12 px-0 text-left interest__button">
                    <a href="{{ route('front.index') }}" type="button" class="btn p-3 border-0 btn__black btn__link">
                        <span class="ml-2 text__small">بازگشت به صفحه اصلی</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection