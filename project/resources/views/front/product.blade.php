@extends('layouts.front')

@section('content')
    <section class="harvest">
        <div class="container-fluid">
            <form action="">
                <div class="row mb-5 d-flex flex-row-reverse">

                    <div class="col-12 col-md-5 pr-0 pr-md-4 mt-5">
                        <div class="row">
                            <div class="col-3 px-0 d-block">
                                @if (!empty($productt->galleries->toArray()))
                                    <div class="d-block">
                                        @foreach($productt->galleries->slice(0,3) as $gal)
                                            @if ($loop->iteration == 1)
                                                @php($src = filter_var($productt->photo, FILTER_VALIDATE_URL) ?$productt->photo:asset('assets/images/products/'.$productt->photo))
                                                <div class="mx-auto mt-1 harvest__image--subsidiary harvest-same-height"
                                                     id="gallery-product">
                                                    <img src="{{$src}}" alt=""
                                                         class="p-3 harvest-img harvest-same-height-img">
                                                </div>
                                            @endif
                                            @php($src = asset('assets/images/galleries/'.$gal->photo))

                                            <div class="mx-auto mt-1 harvest__image--subsidiary harvest-same-height"
                                                 id="gallery-product">
                                                <img src="{{$src}}" alt=""
                                                     class="p-3 harvest-img harvest-same-height-img">
                                            </div>
                                        @endforeach

                                        <div class="d-flex justify-content-center mx-auto">
                                            <button type="button"
                                                    class="btn border-0 mb-0 pl-0 pb-0 harvest__image--btn"
                                                    data-toggle="modal" data-target="#harvest-more-btn">
                                                <span class="text__gray text__iranyekan--regular">تصاویر بیشتر از محصول</span>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="col-9 px-0 himg">
                                <div class="harvest__image--original harvest-same-height">
                                    <img src="{{filter_var($productt->photo, FILTER_VALIDATE_URL) ?$productt->photo:asset('assets/images/products/'.$productt->photo)}}"
                                         alt="" class="zoom harvest-container harvest-same-height-img"
                                         id="image-original">
                                    @if($productt->previous_price)
                                        <div class="px-4 py-2 d-inline-block discount__tag harvest__image--tag">
                                            <span class="text__large text__number">%{{(int)(100 - (($productt->price / $productt->previous_price) * 100))}}</span>
                                        </div>
                                    @endif

                                    <div class="p-2 d-flex harvest__share">
                                        <span class="text-white text__medium ml-2 text__iranyekan--light">share</span>
                                        <img src="{{ asset('/assets/front/icon/share.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-7 px-0 mt-5">
                        <div class="py-2">
                            <div class="d-flex justify-content-between">
                                <span class="text__iranyekan--bold--ennum text__large text__black">{{$productt->category ? $productt->category->name : ''}}</span>
                                <span class="text__iranyekan--bold--ennum text__large text__black">{{ $productt->name }}</span>
                                <input type="hidden" id="product_id" value="{{$productt->id}}">
                            </div>
                            <div class="d-flex justify-content-between">
                                @if($productt->tags)
                                    <span class="text__black text__medium text__iranyekan--regular">{{--{{implode(' - ',$productt->tags)}}--}}</span>
                                @endif
                                {{--                                <p class="text__black text__medium">{{'آکام پارس'}}</p>--}}
                            </div>
                        </div>

                        @if (!empty($productt->color))
                            <div class="d-flex justify-content-between align-items-center py-2 border__top">
                                <span class="text__small text__black w-25 text__iranyekan--regular">انتخاب رنگ:</span>
                                <div class="d-flex flex-wrap justify-content-between ml-n2">
                                    @foreach($productt->color as $color)
                                        {{-- <div class="custom-control  custom-radio custom-control-inline d-flex align-items-center mr-3" style="border:1px solid {{$value}};color:{{$value}}" >
                                            <input type="radio" name="color" id="{{$key}}" class="custom-control-input" data-color="{{$value}}" {{$loop->iteration == 1 ? 'checked' : ''}}>
                                            <label class="custom-control-label p-1" for="{{$key}}">{{$key}}</label>
                                        </div> --}}
                                        <input class="d-none color-product" type="radio" name="color"
                                               id="{{'color_' . $loop->index}}" data-color="{{$color->color_values}}"
                                               data-inventory="{{$color->color_inventory}}" {{$loop->iteration == 1 ? 'checked' : ''}}>
                                        <label class="mb-0 mx-2 container-color text__small d-flex align-items-center text__iranyekan--regular"
                                               for="{{'color_' . $loop->index}}">{{$color->color_name}}
                                            <span class="checkmark-color"
                                                  style="background-color:{{$color->color_values}};"></span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        @if (isset(json_decode($productt->attributes,true)['warranty_type']))
                            <div class="d-flex justify-content-between py-1 border__top">
                                <div class="form-group w-100 mb-0">
                                    <div class="input-group d-flex">
                                        <div class="input-group-append d-flex justify-content-between">
                                            <label class="input-group-text pr-0 text__small text__black custom__select--label text__iranyekan--regular"
                                                   for="guarantee">
                                                انتخاب گارانتی:
                                            </label>

                                        </div>
                                        <select class="custom-select d-flex flex-row-reverse text__small text__black custom__select--input text__iranyekan--regular"
                                                id="guarantee">
                                            @php($warranty = json_decode($productt->attributes,true)['warranty_type'])
                                            @foreach ($warranty['values'] as $key=>$item)
                                                <option value="{{$item}}" data-key="warranty_type"
                                                        data-price="{{$warranty['prices'][$key]}}"
                                                        class="product-attr text__black">{{__($item)}}</option>
                                            @endforeach
                                            {{-- <div>
                                                <i class="ion-chevron-down prev number__input--prepend--prev"></i>
                                            </div>   --}}
                                        </select>

                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="d-flex justify-content-between py-2 border__top">
                            @if(!$productt->emptyStock())
                                <div class="w-50 d-flex justify-content-between align-items-center pl-2">
                                    <span class="text__small text__black text__iranyekan--regular">تعداد کالا</span>
                                    <div class="form-group mb-0 d-flex justify-content-end">
                                        <div class="input-group number__input--group spinner my-n1">
                                            <input type="number"
                                                   class="form-control text-center text__black text__small number__input--form-control quantity"
                                                   id="number-input quantity" name="quantity"
                                                   aria-describedby="number-text" value="1" min="1"
                                                   max="{{!empty($productt->stock) ? $productt->stock : 1000}}">
                                            <div class="input-group-prepend number__input--prepend">
                                                <span class="input-group-text py-0 text__small text__black number__input--prepend--text text__iranyekan--regular"
                                                      id="number-text">عدد</span>
                                                <div class="d-flex flex-column number__input--prepend--shape">

                                                    <i class="ion-chevron-up next number__input--prepend--next"></i>
                                                    <i class="ion-minus d-flex justify-content-center number__input--prepend--middle"></i>
                                                    <i class="ion-chevron-down prev number__input--prepend--prev"></i>

                                                </div>

                                                {{-- <div class="ml-3">
                                                    <span class="next number__input--prepend--next text__medium"></span>
                                                    <span class="text__medium number__input--prepend--middle">-</span>
                                                    <span class="prev number__input--prepend--prev text__medium"></span>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="{{!$productt->emptyStock() ? 'w-50 border__right' : 'w-100'}} d-flex justify-content-between align-items-center pr-1 ">
                                <span class="text__small text__black text__iranyekan--regular">موجودی:</span>
                                <span class="text__small text__black text__iranyekan--light inventory-text {!! $productt->type == 'Physical' ? $productt->emptyStock() ? 'harvest__close' : 'harvest__checkmark' : 'harvest__checkmark' !!}">{!! $productt->type == 'Physical' ? $productt->emptyStock() ? 'در انبار موجود نیست ' : 'در انبار موجود است' : 'در انبار موجود است' !!}</span>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between py-2 border__top">
                            <div class="{{$productt->previous_price ? 'w-50' : 'w-100'}} d-flex justify-content-between pl-2">
                                <span class="text__small text__black text__iranyekan--regular">قیمت کالا:</span>
                                <div class="d-flex flex-row-reverse">
                                    <span class="text__small text__black text__number mr-2 text__iranyekan--regular"
                                          id="{{empty($productt->previous_price) ? 'sizeprice' : '' }}">{{$productt->previous_price ?  number_format((int)$productt->previous_price)  : number_format((int)$productt->price)}}</span>
                                    <span class="text__small text__black text__iranyekan--regular">RL</span>
                                </div>
                            </div>
                            @if ($productt->previous_price)
                                <div class="w-50 d-flex justify-content-between pr-2 border__right">
                                    <span class="text__small text__green text__iranyekan--regular"> {{(int)(100 - ($productt->price / $productt->previous_price) * 100) . "%" }}  تخفیف :</span>
                                    <div class="d-flex flex-row-reverse">
                                        <span class="text__small text__green text__number mr-2 text__iranyekan--regular"
                                              id="sizeprice">{{number_format((int)$productt->price)}}</span>
                                        <span class="text__small text__green text__iranyekan--regular">RL</span>
                                    </div>
                                </div>
                            @endif
                            <input type="hidden" value="{{$productt->price}}" id="product-price-without-guarantee">
                        </div>

                        <div class="py-2 harvest__btn--interest">
                            @if (!$productt->emptyStock())
                                <div class="w-50 harvest__btn--interest--black">
                                    <a href="javascript:;" id="addcrt"
                                       class="py-2 w-100 btn border-0 mb-0 btn__black d-flex harvest__icon harvest__icon--black text__small">
                                        <img src="{{ asset('/assets/front/icon/cart.svg') }}" alt="" class="pl-2">
                                        <span class="pr-2 text__small text-white harvest__icon--border--right text__iranyekan--bold">افزودن به سبد خرید</span>
                                    </a>
                                </div>
                            @endif
                            <div class="{{$productt->emptyStock() ? 'w-100' : 'w-50'}} harvest__btn--interest--green">
                                <a class="w-100 btn mb-0 d-flex btn__green harvest__icon harvest__icon--green add-to-wish"
                                   data-href="{{ route('user-wishlist-add',$productt->id) }}">
                                    <img src="{{ asset('/assets/front/icon/heart-white.svg') }}" alt="" class="pl-2">
                                    <span class="pr-2 text__small text-white harvest__icon--border--right text__iranyekan--bold">افزودن به لیست دلخواه</span>
                                </a>
                            </div>

                        </div>

                        <div class="d-none d-md-flex py-3 harvest__easy--row">
                            <div class="d-none d-md-inline-block text-center harvest__easy--information--text">
                                <span class="d-block font-weight-bold text__iranyekan--bold">خرید آسان و سریع</span>
                                <span class="d-block text__iranyekan--light">با اطمینان خرید کنید</span>
                            </div>

                            <div class="d-flex justify-content-around harvest__easy--information--icon">
                                <div class="text-center harvest__easy--icon">
                                    <img src="{{ asset('/assets/front/icon/Express delivery.svg') }}" alt="support">
                                    <span class="d-block mt-2 text__iranyekan--regular">تحویل اکسپرس</span>
                                </div>

                                <div class="text-center harvest__easy--icon">
                                    <img src="{{ asset('/assets/front/icon/Guaranteed return.svg') }}" alt="support">
                                    <span class="d-block mt-2 text__iranyekan--regular">7 روز ضمانت برگشت</span>
                                </div>

                                <div class="text-center harvest__easy--icon">
                                    <img src="{{ asset('/assets/front/icon/Pay on the spot.svg') }}" alt="support">
                                    <span class="d-block mt-2 text__iranyekan--regular">پرداخت در محل</span>
                                </div>

                                <div class="text-center harvest__easy--icon">
                                    <img src="{{ asset('/assets/front/icon/gift card.svg') }}" alt="support">
                                    <span class="d-block mt-2 text__iranyekan--regular">کارت هدیه آکام پارس</span>
                                </div>

                                <div class="text-center harvest__easy--icon">
                                    <img src="{{ asset('/assets/front/icon/Support.svg') }}" alt="support">
                                    <span class="d-block mt-2 text__iranyekan--regular">پشتیبانی</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="introduction">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-12 px-0 d-flex justify-content-between">
                    <h6 class="text__iranyekan--bold option__text--fa">معرفی کالا</h6>
                    <h6 class="text__iranyekan--bold option__text--en">Product Introduction</h6>
                </div>
                @if (isset($productt->details))
                    <div class="col-12 px-0 mt-4">
                        <p class="text-justify text__black text__medium text__iranyekan--regular">{!! $productt->details !!}</p>
                    </div>
                @endif

            </div>
        </div>
    </section>

    <section class="specification">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-12 px-0 d-flex justify-content-between">
                    <h6 class="text__iranyekan--bold option__text--fa">مشخصات کالا</h6>
                    <h6 class="text__iranyekan--bold option__text--en">Product Specification</h6>
                </div>

                <div class="col-12 px-0 mt-4">
                    @if (!empty($productt->specifications))
                        @foreach (json_decode($productt->specifications) as $key=>$value)
                            <div class="d-flex border__bottom {{$loop->iteration == 1  ? 'border__top' : '' }}">
                                <span class="py-3 text__small text__black specification__fixed text__number text__iranyekan--regular">{{$key}}</span>
                                <span class="py-3 pr-2 text__small text-justify text__black border__right specification__variable text__number text__iranyekan--regular">{{$value}}</span>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="related__producs">
        @php($similar_products = $productt->category->products()->where('status','=',1)->where('id','!=',$productt->id)->take(5)->get())
        @if ($similar_products->count())
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-md-12 px-0 d-flex justify-content-between">
                        <h6 class="text__iranyekan--bold option__text--fa">محصولات مرتبط</h6>
                        <h6 class="text__iranyekan--bold option__text--en">Related Producs</h6>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-12 owl-carousel owl-theme px-0 mt-n1 products__card">
                        @foreach($productt->category->products()->where('status','=',1)->where('id','!=',$productt->id)->take(5)->get() as $prod)

                            <a href="{{ route('front.product', $prod->slug) }}" class="item">
                                <div class="card h-100 border-0">
                                    <div class="products__card--img">
                                        <img src="{{ $prod->photo ? asset('assets/images/products/'.$prod->photo):asset('assets/images/noimage.png') }}"
                                             alt="" class="card-img">
                                        <div class="card-img-overlay card-img-overlay-discount">
                                        <!--                                            <div class="px-3 d-inline-block favorites__cart mt-2">
                                                <div class="d-flex">
                                                    <a href="javascript:;" class="text-decoration-none add-to-wish"  data-href="{{ route('user-wishlist-add',$prod->id) }}">
                                                        <img src="{{ asset('/assets/front/icon/heart-white.svg') }}"  alt="" class="my-2 ml-2 favorites__cart&#45;&#45;img">
                                                    </a>
                                                    <a href="" class="text-decoration-none">
                                                        <img src="{{ asset('/assets/front/icon/cart.svg') }}" alt="" class="my-2 favorites__cart&#45;&#45;img">
                                                    </a>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>

                                    <div class="card-body px-0">
                                        <div class="card-title products__card--title">
                                            <h5 class="font-weight-bold">
                                                <span class="text-decoration-none text__black text__iranyekan--bold--ennum">{{$prod->showName()}}</span>
                                            </h5>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-9 pl-0">
                                                    <div class="products__card--text text-justify">
                                                        <span class="text__iranyekan--regular d-block text__medium">{{$prod->category->name}}</span>
                                                        @if($prod->tags)
                                                            <span class="mt-1 d-block text__medium text__iranyekan--light">{{--{{implode(' , ',$prod->tags)}}--}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-3 pt-2">
                                                    <div class="row">
                                                        @if(!empty($prod->color))
                                                            <div class="col-12">
                                                                <div class="d-flex justify-content-end products__card--color">
                                                                    {{--@foreach (collect($prod->color)->slice(0,2) as $color)
                                                                        <div class="products__card--color--color mr-3" style="background-color: {{$color}}"></div>
                                                                    @endforeach--}}
                                                                </div>
                                                            </div>

                                                            <div class="col-12 mt-3">
                                                                <div class="d-flex justify-content-end align-items-center products__card--color">
                                                                    {{--                                                                <div class="mr-2 products__card--text">--}}
                                                                    {{--                                                                    @php($count = collect($prod->color)->slice(3)->count())--}}
                                                                    {{--                                                                    <span class="text__number text__iranyekan--regular">{{$count ? $count . " +" : ""}}</span>--}}
                                                                    {{--                                                                </div>--}}
                                                                    {{--                                                                @foreach (collect($prod->color)->slice(2,1) as $color)--}}
                                                                    {{--                                                                    <div class="products__card--color--color mr-3" style="background-color: {{$color}}"></div>--}}
                                                                    {{--                                                                @endforeach--}}
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer px-0 bg-white border-0">
                                        <div class="row">
                                            <div class="col-12 mt-3">
                                                <div class="d-flex justify-content-between py-3 px-3 products__card--price">
                                                    <span class="text__large text__iranyekan--regular">قیمت کالا:</span>
                                                    <div class="d-flex flex-row-reverse">
                                                        <span class="text__large mx-2 text__number text__iranyekan--regular">{{number_format($prod->price)}}</span>
                                                        <span class="text__large text__iranyekan--regular">RL</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </section>

    <section class="harvest__btn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0 d-flex justify-content-end">
                    <button class="btn mb-0 px-0 border-0 d-flex align-items-center">
                        <p class="text__gray text__medium ml-2">محصولات بیشتر</p>
                        <img src="{{ asset('/assets/front/icon/harvest more.svg') }}" alt="" class="harvest__btn--icon">
                    </button>
                </div>
            </div>
        </div>
    </section>



    {{-- modal --}}
    <section class="harvest__modal">
        <div class="modal fade" style="z-index: 1041; background-color: transparent" id="harvest-more-btn" role="dialog"
             aria-labelledby="harvest-more-btn" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content harvest__modal--content">
                    <div class="modal-header">
                        <button type="button" class="close harvest__modal--close" data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body harvest__modal--body">
                        <div class="harvest__image--original">
                            <img src="{{ filter_var($productt->photo, FILTER_VALIDATE_URL) ?$productt->photo:asset('assets/images/products/'.$productt->photo)}}"
                                 alt="" class="p-3 harvest-modal-container harvest__modal--body--img">
                        </div>
                    </div>
                    <div class="modal-footer p-3 d-flex justify-content-around harvest__modal--footer">

                        @foreach($productt->galleries as $gal)
                            <div class="d-flex justify-content-center mx-auto mt-1 harvest__image--subsidiary">
                                <img src="{{asset('assets/images/galleries/'.$gal->photo)}}" alt=""
                                     class="p-3 <!--harvest-modal-img-->">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <!-- elevatezoom-master  -->
    {{-- <script src='{{asset('assets/front/js/elevatezoom-master/jquery-1.8.3.min.js')}}'></script> --}}
    <script src='{{asset('assets/front/js/elevatezoom-master/jquery.elevateZoom-3.0.8.min.js')}}'></script>
    <script src='{{asset('assets/front/js/elevatezoom-master/jquery.elevatezoom.js')}}'></script>

    <script>
        $(document).ready(function () {
            priceWithGuarantee('#guarantee');

            $('#guarantee').change(function () {
                priceWithGuarantee(this);
            });

            if ($('input[name="color"]').length) {
                check_inventory('input[name="color"]:checked');
                $('input[name="color"]').change(function () {
                    check_inventory(this);
                });
            }


            var zoomConfig = {zoomType: "lens", lensShape: "round", lensSize: 200};
            var image = $("#gallery-product img");
            var zoomImage = $("img#image-original");

            zoomImage.elevateZoom(zoomConfig);
            image.on("click", function () {
                $(".zoomContainer").remove();
                zoomImage.removeData("elevateZoom");
                zoomImage.attr("src", $(this).data("image"));
                zoomImage.data("zoom-image", $(this).data("zoom-image"));
                zoomImage.elevateZoom(zoomConfig);
            });


        });
    </script>
@endsection
