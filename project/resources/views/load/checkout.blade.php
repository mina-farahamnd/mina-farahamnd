@php
    $total_price = 0;
    $total_qty = 0;
@endphp
<div id="tab-1">
    <section class="title">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-between w-100 py-2 px-4 title__green">
                        <span class="text-white text__medium text__iranyekan--bold">سبد خرید شما</span>
                        <span class="d-none d-md-flex text-white text__small text__iranyekan--regular">کالاهای موجود در سبد شما ثبت نشده اند، برای ثبت سفارش مراحل بعدی را تکمیل نمایید.</span>
                    </div>
                </div>
                <div class="col-12 d-block d-md-none px-0 mt-4 d-flex align-items-center">
                    <span class="text__green text__small text__iranyekan--regular">کالاهای موجود در سبد شما ثبت نشده اند، برای ثبت سفارش مراحل بعدی را تکمیل نمایید.</span>
                </div>
            </div>
        </div>
    </section>

    <section class="user">
        <div class="container-fluid user__container">
                @if($products)
                    @foreach($products as $product)
                        <div class="row mb-5 w-100 user-cart">
                            <div class="col-12 px-0 d-md-flex flex-md-row-reverse">

                                <div class="w-100">
                                    <div class="row">
                                        <div class="col-12 col-md-6 py-2 pr-0 pl-0 pl-md-4 d-flex justify-content-between user__border--top">
                                            <span class="text__small text__black text__iranyekan--regular">نام کالا:</span>
                                            <span class="text__small text__black text__iranyekan--regular--ennum">{{ $product['item']['name'] }}</span>
                                        </div>
                                        <div class="col-12 col-md-6 py-2 px-0 d-flex justify-content-between user__border--top">
                                            <span class="pr-md-3 text__small text__black text__iranyekan--regular user__border--right">مدل کالا:</span>
                                            <span class="text__small text__black text__iranyekan--regular">{{ __($product['item']['type']) }}</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-6 py-2 pr-0 pl-0 pl-md-4 d-flex align-items-center justify-content-between user__border--top">
                                            <span class="text__small text__black text__iranyekan--regular">رنگ کالا:</span>
                                            @if($product['item']->color && $product['color'])
                                                <div class="d-flex align-items-center">
                                                    @php
                                                        $color = array_search("#".$product['color'],collect($product['item']->color)->toArray());
                                                    @endphp
                                                    <span class="text__small text__black pl-3 text__iranyekan--regular">{{$color}}</span>
                                                    <span style="width: 1em; height: 1rem; background-color: #{{ $product['color'] }}; border-radius: .3rem;"></span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-12 col-md-6 px-0 d-flex align-items-center justify-content-between user__border--top">
                                            <span class="pr-md-3 text__small text__black text__iranyekan--regular user__border--right">تعداد:</span>
                                            <div class="form-group mb-0 d-flex justify-content-end">
                                                <div class="input-group number__input--group spinner">
                                                    <input disabled type="number"
                                                           class="form-control text-center text__black text__small number__input--form-control number-input"
                                                           aria-describedby="number-text"
                                                           value="{{ $product['qty'] }}"
                                                           data-proid="{{$product['item']['id']}}"
                                                           data-color="{{!empty($product['color']) ?$product['color'] : ''}}"
                                                           data-warranty="{{!empty($product['values']) ? $product['values'] : ''}}">
                                                    <div class="input-group-prepend number__input--prepend ">
                                                        <span class="input-group-text py-0 text__iranyekan--regular text__small text__black number__input--prepend--text"
                                                              id="number-text">عدد</span>
                                                        <div class="d-flex flex-column">
                                                            <i class="ion-chevron-up next number__input--prepend--next change-product-quantity"></i>
                                                            <i class="ion-minus d-flex justify-content-center number__input--prepend--middle"></i>
                                                            <i class="ion-chevron-down prev number__input--prepend--prev change-product-quantity"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-md-6 py-2 pr-0 pl-0 pl-md-4 d-flex justify-content-between user__border--top">
                                            <span class="text__small text__black text__iranyekan--regular">گارانتی کالا:</span>
                                            <span class="text__small text__black text__iranyekan--regular">{{ !empty($product['values']) ? __($product['values']) : 'بدون گارانتی' }}</span>
                                        </div>
                                        <div class="col-12 col-md-6 py-2 px-0 d-flex justify-content-between user__border--top ">
                                            <span class="pr-md-3 text__small text__black text__iranyekan--regular user__border--right">قیمت کالا:</span>
                                            <div class="d-flex flex-row-reverse">
                                                <span class="text__small text__black mr-2">{{ number_format((int)$product['item']['price'])}}</span>
                                                <span class="text__small text__black">RL</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 px-4 d-flex justify-content-between user__border--top">
                                            <span class="font-weight-bold text__medium text__black text__iranyekan--regular">قیمت مجموع کالاها:</span>
                                            <div class="d-flex flex-row-reverse">
                                                @php( $total_price += ((int)$product['item']['price']) * $product['qty'])
                                                @php( $total_qty += (int)$product['qty'] )
                                                <span class="font-weight-bold text__medium text__black mr-2">{{ number_format(((int)$product['item']['price']) * $product['qty']) }}</span>
                                                <span class="font-weight-bold text__medium text__black">RL</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pr-0 user__discount--image">
                                    <img src="{{ asset('assets/images/products/'.$product['item']['photo']) }}" alt="">
                                    <a type="button" class="btn mb-0 position-relative cart-remove" data-toggle="modal"
                                       data-target="#close-icon"
                                       data-class="cremove{{ $product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values']) }}"
                                       data-href="{{ route('product.cart.remove',$product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values'])) }}">
                                        <span class="user__discount--image--close user-close">×</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @endif
            <div class="row mb-3 mx-0">
                <div class="col-12 col-lg-5 pr-0 pl-0 pl-lg-4">
                    <div class="form-group mb-0  w-100">
                        <div class="input-group mb-4 user__discount--group">
                            <div class="input-group-append user__discount--prepend">
                                            <span class="input-group-text text__black text__small text__iranyekan--regular mr-3 pl-0"
                                                  id="discount">کد تخفیف:</span>
                            </div>
                            <input type="text"
                                   class="form-control pr-2 border-right-0 user__discount--input text__iranyekan--light"
                                   placeholder="کوپن تخفیف خود را اینجا وارد نمایید."
                                   aria-label="Recipient's username" aria-describedby="basic-addon2" id="coupon-code">

                            <div class="input-group-append mr-2">

                                <button type="button" class="btn mb-0 border-0 btn__black btn__coupon"  id="check-coupon-form">
                                    <span class="mr-2 text__small text__iranyekan--bold">اعمال کوپن</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7 d-flex justify-content-end px-0">
                    <div class="d-flex align-items-center justify-content-between user__price">
                        <div class="d-flex align-items-center user__picture">
                            <img src="{{ asset('assets/front/icon/cart-black.svg') }}" alt="" class="p-2">
                            <span class="text__small text__black text__iranyekan--bold">مبلغ قابل پرداخت: </span>
                        </div>
                        <div class="d-flex flex-row-reverse">
                            <span class="font-weight-bold text__medium mx-2 price-with-discount" data-price-with-discount="{{ (int)$total_price }}">{{ number_format((int)$total_price) }}</span>
                            <span class="font-weight-bold text__medium ">RL</span>
                        </div>
                    </div>
                    <div class="d-none d-lg-flex mr-2 user__price--btn">
                        <button type="button" class="btn border-0 px-2 mb-0 rounded-0 btn__black btn__link">
                            <span class="text__iranyekan--bold ">ادامه خرید</span>
                        </button>
                        <button href="javascript:;" type="button"
                                class="btn px-2 border-0 mb-0 btn__green btn__green--leftrounded btn__link go-tab-2">
                            <span class="text__iranyekan--bold ">ثبت سفارش</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 px-0 d-lg-none d-flex justify-content-end  mt-4">
                    <div class="d-flex mr-2 user__price--btn">
                        <button type="button" class="btn border-0 px-2 mb-0 rounded-0 btn__black btn__link user__price--btn--black user__price--btn--responsive">
                            <span class="text__small text__iranyekan--bold ">ادامه خرید</span>
                        </button>
                        <button href="javascript:;" type="button"
                                class="btn px-2 border-0 mb-0 btn__green btn__green--leftrounded btn__link go-tab-2 user__price--btn--responsive">
                            <span class="text__small text__iranyekan--bold ">ثبت سفارش</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shopping__easy">
        <div class="container-fluid">
            <div class="row px-3 py-4 shopping__easy--row">
                <div class="col-md-3 d-none d-md-inline-block text-center shopping__easy--information">
                    <span class="d-block mt-4 text__large text__iranyekan--bold">خرید آسان و سریع</span>
                    <span class="text__large text__iranyekan--light">با اطمینان خرید کنید</span>
                </div>

                <div class="col-12 col-md-9 px-0 d-flex justify-content-around">
                    <div class="text-center shopping__easy--icon">
                        <img src="./assets/front/icon/Express delivery.svg" alt="support">
                        <span class="d-block mt-2 text__medium text__iranyekan--bold">تحویل اکسپرس</span>
                    </div>

                    <div class="text-center shopping__easy--icon">
                        <img src="./assets/front/icon/Guaranteed return.svg" alt="support">
                        <span class="d-block mt-2 text__medium text__iranyekan--bold">7 روز ضمانت برگشت</span>
                    </div>

                    <div class="text-center shopping__easy--icon text__iranyekan--bold">
                        <img src="./assets/front/icon/Pay on the spot.svg" alt="support">
                        <span class="d-block mt-2 text__medium text__iranyekan--bold">پرداخت در محل</span>
                    </div>

                    <div class="text-center shopping__easy--icon">
                        <img src="./assets/front/icon/gift card.svg" alt="support">
                        <span class="d-block mt-2 text__medium text__iranyekan--bold">کارت هدیه آکام پارس</span>
                    </div>

                    <div class="text-center shopping__easy--icon">
                        <img src="./assets/front/icon/Support.svg" alt="support">
                        <span class="d-block mt-2 text__medium text__iranyekan--bold">پشتیبانی</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="related__producs">
        {{--        @php($similar_products = $productt->category->products()->where('status','=',1)->where('id','!=',$productt->id)->take(5)->get())--}}
        {{--        @if ($similar_products->count())--}}
        {{--            <div class="container-fluid">--}}
        {{--                <div class="row mb-3">--}}
        {{--                    <div class="col-md-12 px-0 d-flex justify-content-between">--}}
        {{--                        <h6 class="font-weight-bold option__text--fa">محصولات مرتبط</h6>--}}
        {{--                        <h6 class="font-weight-bold option__text--en">Related Producs</h6>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--                <div class="row mt-5">--}}
        {{--                    <div class="col-12 owl-carousel owl-theme px-0 mt-n1 products__card">--}}
        {{--                        @foreach($productt->category->products()->where('status','=',1)->where('id','!=',$productt->id)->take(5)->get() as $prod)--}}
        {{--                            <div class="item">--}}
        {{--                                <div class="card h-100 border-0">--}}
        {{--                                    <div class="products__card--img">--}}
        {{--                                        <img src="{{ $prod->photo ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" alt="" class="card-img">--}}
        {{--                                        <div class="card-img-overlay card-img-overlay-discount">--}}
        {{--                                            <div class="px-3 d-inline-block favorites__cart mt-2">--}}
        {{--                                                <div class="d-flex">--}}
        {{--                                                    <a href="javascript:;" class="text-decoration-none add-to-wish"  data-href="{{ route('user-wishlist-add',$prod->id) }}">--}}
        {{--                                                        <img src="{{ asset('/assets/front/icon/heart-white.svg') }}"  alt="" class="my-2 ml-2 favorites__cart--img">--}}
        {{--                                                    </a>--}}
        {{--                                                    <a href="" class="text-decoration-none">--}}
        {{--                                                        <img src="{{ asset('/assets/front/icon/cart.svg') }}" alt="" class="my-2 favorites__cart--img">--}}
        {{--                                                    </a>--}}
        {{--                                                </div>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}

        {{--                                    <div class="card-body px-0">--}}
        {{--                                        <div class="card-title products__card--title">--}}
        {{--                                            <h5 class="font-weight-bold">--}}
        {{--                                                <a href="{{ route('front.product', $prod->slug) }}" class="text-decoration-none text__black">{{$prod->showName()}}</a>--}}
        {{--                                            </h5>--}}
        {{--                                        </div>--}}
        {{--                                        <div class="card-text">--}}
        {{--                                            <div class="row">--}}
        {{--                                                <div class="col-9">--}}
        {{--                                                    <div class="products__card--text">--}}
        {{--                                                        <span class="font-weight-bold d-block text__medium">{{$prod->category->name}}</span>--}}
        {{--                                                        @if($prod->tags)--}}
        {{--                                                            <span class="mt-1 text__medium">{{implode(' , ',$prod->tags)}}</span>--}}
        {{--                                                        @endif--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <div class="col-3 pt-2">--}}
        {{--                                                    <div class="row">--}}
        {{--                                                        @if(!empty($prod->color))--}}
        {{--                                                        <div class="col-12">--}}
        {{--                                                            <div class="d-flex justify-content-end products__card--color">--}}
        {{--                                                                @foreach (collect($prod->color)->slice(0,2) as $color)--}}
        {{--                                                                    <div class="products__card--color--color mr-3" style="background-color: {{$color}}"></div>--}}
        {{--                                                                @endforeach--}}
        {{--                                                            </div>--}}
        {{--                                                        </div>--}}
        {{--            --}}
        {{--                                                        <div class="col-12 mt-3">--}}
        {{--                                                            <div class="d-flex justify-content-end align-items-center products__card--color">--}}
        {{--                                                                <div class="mr-2 products__card--text">--}}
        {{--                                                                    @php($count = collect($prod->color)->slice(3)->count())--}}
        {{--                                                                    <span class="text__number">{{$count ? $count . " +" : ""}}</span>--}}
        {{--                                                                </div>--}}
        {{--                                                                @foreach (collect($prod->color)->slice(2,1) as $color)--}}
        {{--                                                                    <div class="products__card--color--color mr-3" style="background-color: {{$color}}"></div>--}}
        {{--                                                                @endforeach--}}
        {{--                                                            </div>--}}
        {{--                                                        </div>--}}
        {{--                                                        @endif--}}
        {{--                                                    </div>--}}
        {{--        --}}
        {{--                                                </div>--}}
        {{--        --}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                    <div class="card-footer px-0 bg-white border-0">--}}
        {{--                                        <div class="row">--}}
        {{--                                            <div class="col-12 mt-3">--}}
        {{--                                                <div class="d-flex justify-content-between py-3 px-3 products__card--price">--}}
        {{--                                                    <span class="text__large">قیمت کالا:</span>--}}
        {{--                                                    <div class="d-flex flex-row-reverse">--}}
        {{--                                                        <span class="text__large mx-2 text__number">{{number_format($prod->price)}}</span>--}}
        {{--                                                        <span class="text__large">RL</span>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        @endforeach--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        @endif--}}
    </section>

    <div class="modal fade user__modal" id="close-icon" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-4 user__modal--content mx-auto">
                <div class="modal-body">
                    <div class="d-flex user__modal--picture">
                        <img src="{{ asset('assets/front/icon/cart-black.svg') }}" alt="" class="p-2">
                        <span class="mr-3 text-justify text__black text__medium text__iranyekan--light">آیا مایل به حذف این محصول از سبد
                                        خرید هستید؟</span>
                    </div>
                    <div class="d-flex mt-4 px-2 w-100">
                        <button type="button" class="w-50 py-1 border-0 btn mb-0 btn__green btn__rounded--yes" id="confirm-remove">
                            <span class="text-center text__small text__iranyekan--bold">بله</span>
                        </button>
                        <button type="button" class="w-50 py-1 border-0 btn mb-0 btn__black btn__rounded--no"
                                data-dismiss="modal">
                            <span class="text-center text__small text__iranyekan--bold">خیر</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div id="tab-2" style="display: none">

    {{-- address --}}
    <section class="title">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-between w-100 py-2 px-4 title__green">
                        <span class="text-white text__medium text__iranyekan--bold">تکمیل سفارش کالا</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="address">
        <div class="container-fluid">

            <div class="row mt-4">
                <div class="col-12 px-0">
                    <h6 class="text__green text__iranyekan--regular">افزودن کالاها به سبد خرید به معنی رزرو کالا برای شما نیست.برای ثبت
                        سفارش باید مراحل خرید را تکمیل نمایید.</h6>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 px-0">
                                <span class="font-weight-bold text__black text__small text__iranyekan--regular">لطفا با کامل کردن بخش های زیر ما را جهت
                                    تکمیل فرآیند ثبت سفارش و ارسال آن یاری کنید.</span>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 col-xl-6 px-0">
                    {{-- <div class="address__user">
                        <div class="d-flex align-items-center px-2 pt-4 pb-3">
                            <div class="address__icon">
                                <img src="{{ asset('assets/front/icon/location.svg') }}" alt="" class="p-2">
                            </div>
                            <span class="mr-3 text__black text__medium text__iranyekan--bold">آدرس شما</span>
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend address__prepend">
                                <span class="input-group-text border-0 pr-0 bg-white text__small text__black text__iranyekan--bold"
                                      id="city"  >شهر</span>
                                </div>
                                <input type="text"
                                       class="form-control border-left-0 rounded-0 address__input"
                                       aria-describedby="city" name="city">
                            </div>
                        </div>
                        <div class="form-group mt-n3">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend address__prepend border-top-0">
                        <span class="input-group-text border-0 pr-0 bg-white text__small text__black text__iranyekan--bold"
                              id="
                        province">استان</span>
                                </div>
                                <input type="text"
                                       class="form-control border-left-0 border-top-0 rounded-0 address__input"
                                       aria-describedby="
                    province" name="state">
                            </div>
                        </div>

                        <div class="form-group mt-n3">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend address__prepend border-top-0">
                                <span class="input-group-text border-0 pr-0 bg-white text__small text__black text__iranyekan--bold"
                                      id="postal-code">کد پستی</span>
                                </div>
                                <input type="number"
                                       class="form-control border-left-0 border-top-0 rounded-0 address__input"
                                       aria-describedby="postal-code" name="post_code">
                            </div>
                        </div>

                        <div class="form-group mt-n3">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend address__prepend border-top-0">
                                <span class="input-group-text border-0 pr-0 bg-white text__small text__black text__iranyekan--bold"
                                      id="phone">تلفن</span>
                                </div>
                                <input type="number"
                                       class="form-control border-left-0 border-top-0 rounded-0 address__input"
                                       aria-describedby="phone" name="phone">
                            </div>
                        </div>

                        <div class="form-group mt-n3">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend address__prepend address__special--prepend border-top-0">
                                <span class="input-group-text border-0 pr-0 bg-white text__small text__black text__iranyekan--bold"
                                      id="address">آدرس</span>
                                </div>
                                <input type="text"
                                       class="form-control border-left-0 border-top-0 rounded-0 address__input address__special--input"
                                       aria-describedby="address" name="address">
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <div class="input-group input-group-lg address__location">
                                <input type="text" class="form-control rounded-0 address__location--input"
                                       placeholder="لطفا محل آدرس خود را روی نقشه تعیین کنید."
                                       aria-describedby="location">
                                <div class="input-group-prepend mr-3">
                                <span class="input-group-text p-2 address__location--prepend text__iranyekan--bold"
                                      id="location">تعیین لوکیشن</span>
                                </div>
                            </div>
                        </div>

                    </div> --}}

                    <div class="address__add">
                        <div class="d-flex align-items-center justify-content-between px-4 py-4">
                            <div class="d-flex align-items-center">

                                <span class="mr-3 text-white text__medium text__iranyekan--bold">انتخاب یا افزودن آدرس جدید</span>
                            </div>

                            <div class="d-flex">
                                <div>
                                    <button class="btn mb-0 border-0" type="button" aria-expanded="false">
                                        <img src="{{ asset('assets/front/icon/arrow-down-white.svg') }}"
                                             alt="" class="arrow-down-white">
                                    </button>
                                </div>

                                {{-- collaps new address --}}
                                {{-- <div>
                                    <button class="btn mb-0" type="button" data-toggle="collapse"
                                            data-target="#address-plus" aria-expanded="false">
                                        <img src="{{ asset('assets/front/icon/plus-white.svg') }}" alt=""
                                             class="arrow-down-white">
                                    </button>
                                </div> --}}


                                {{--map and modal new address --}}
                                <div>
                                    <button class="btn mb-0 border-0" type="button" data-toggle="modal"
                                            data-target="#address-new" id="add-new-location" aria-expanded="false">
                                        <img src="{{ asset('assets/front/icon/plus-white.svg') }}" alt=""
                                             class="arrow-down-white">
                                    </button>
                                </div>
                            </div>
                        </div>


                        {{--map and modal new address --}}

                        <div class="modal fade map__modal" style="z-index: 2000; background-color: transparent;" id="address-new" tabindex="-1" role="dialog" aria-labelledby="address-new" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content px-2 px-sm-5" style="border-radius: 2rem; border:1px solid #c8c8c8">
                                    <div class="modal-header border-bottom-0 d-flex justify-content-between">
                                         <h5 class="modal-title" id="address-new">تبت آدرس</h5>
                                        <button type="button" class="close border-0 mb-0 mt-3 ml-0 mr-auto" data-dismiss="modal" aria-label="Close">
                                            <span class="text__large" aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mt-0">
                                        <!--                                                        <div id="map-modal">
                                                                                                    <div id="search-address-form" >
                                                                                                        <div class="form-group">
                                                                                                            <label class="text__gray text__medium text__iranyekan&#45;&#45;regular">آدرس خود را جستجو کنید :</label>
                                                                                                            <input type="text" id="search-address" class="form-control p-2 address__map&#45;&#45;input">
                                                                                                        </div>
                                                                                                        <input type="button" id="search-address-submit" class="btn border-0 my-4 btn__green text__small address__map&#45;&#45;btn" value="جستجو">

                                                                                                        <ul class="list-group mb-3"  id="result" ></ul>
                                                                                                    </div>
                                                                                                    <div id="map" class="mx-auto address__map" style=""></div>


                                                                                                    <button type="button" id="get-full-address" class="btn my-4 border-0 btn__green text__small d-block address__map&#45;&#45;btn">تایید</button>
                                                                                                </div>-->
                                        <div class="w-100">
                                            <div class="address__user" id="user-address">
                                                <div class="d-flex align-items-center px-2 pt-4 pb-3">
                                                    <div class="address__icon">
                                                        <img src="{{ asset('assets/front/icon/location.svg') }}" alt="" class="p-2">
                                                    </div>
                                                    <span class="mr-3 text__black text__medium text__iranyekan--bold">آدرس شما</span>
                                                </div>




                                                <div class="form-group">
                                                    <div class="input-group input-group-lg">
                                                        <div class="input-group-prepend address__prepend">
                                                                <span class="input-group-text border-0 pr-0 bg-white text__small text__black text__iranyekan--bold"
                                                                >عنوان ادرس</span>
                                                        </div>
                                                        <input type="text"
                                                               class="form-control border-left-0 rounded-0 address__input"
                                                               aria-describedby="
                                                            address_title" name="address_title" >
                                                    </div>

                                                    <div class="input-group input-group-lg ">
                                                        <div class="input-group-prepend address__prepend border-top-0">
                                                                        <span class="input-group-text border-0 pr-0 bg-white text__small text__black text__iranyekan--bold"
                                                                              id="city"  >شهر</span>
                                                        </div>
                                                        <input type="text"
                                                               class="form-control border-left-0 rounded-0 address__input border-top-0"
                                                               aria-describedby="city" name="city">
                                                    </div>
                                                </div>

                                                <div class="d-none">
                                                    <input type="hidden" name="lat" value="0">
                                                    <input type="hidden" name="lng" value="0">
                                                </div>


                                                <div class="form-group mt-n3">
                                                    <div class="input-group input-group-lg">
                                                        <div class="input-group-prepend address__prepend border-top-0">
                                                                <span class="input-group-text border-0 pr-0 bg-white text__small text__black text__iranyekan--bold"
                                                                      id="
                                                                province">استان</span>
                                                        </div>
                                                        <input type="text"
                                                               class="form-control border-left-0 border-top-0 rounded-0 address__input"
                                                               aria-describedby="
                                                            province" name="state">
                                                    </div>
                                                </div>


                                                <div class="form-group mt-n3">
                                                    <div class="input-group input-group-lg">
                                                        <div class="input-group-prepend address__prepend border-top-0">
                                                                        <span class="input-group-text border-0 pr-0 bg-white text__small text__black text__iranyekan--bold"
                                                                              id="postal-code">کد پستی</span>
                                                        </div>
                                                        <input type="number"
                                                               class="form-control border-left-0 border-top-0 rounded-0 address__input"
                                                               aria-describedby="postal-code" name="post_code">
                                                    </div>
                                                </div>

                                                <div class="form-group mt-n3">
                                                    <div class="input-group input-group-lg">
                                                        <div class="input-group-prepend address__prepend border-top-0">
                                                                        <span class="input-group-text border-0 pr-0 bg-white text__small text__black text__iranyekan--bold"
                                                                              id="phone">تلفن</span>
                                                        </div>
                                                        <input type="number"
                                                               class="form-control border-left-0 border-top-0 rounded-0 address__input"
                                                               aria-describedby="phone" name="phone">
                                                    </div>
                                                </div>

                                                <div class="form-group mt-n3">
                                                    <div class="input-group input-group-lg">
                                                        <div class="input-group-prepend address__prepend address__special--prepend border-top-0">
                                                                        <span class="input-group-text border-0 pr-0 bg-white text__small text__black text__iranyekan--bold"
                                                                              id="address">آدرس</span>
                                                        </div>
                                                        <input type="text"
                                                               class="form-control border-left-0 border-top-0 rounded-0 address__input address__special--input"
                                                               aria-describedby="address" name="address">
                                                    </div>
                                                </div>

                                                <button type="button" id="save-full-address" class="btn border-0 my-4 btn__green text__small d-block address__map--btn text__iranyekan--bold">تایید</button>
                                            </div>

                                        </div>
                                    </div>
                                    {{-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="address__collapse px-5">
                        <div class="" id="address-select">
                            <div class="row py-4" id="user-addresses">
                                @include('front.inc.load_full_address',['addresses' , $addresses])

                            </div>
                        </div>

                        {{-- collaps new address --}}
                        {{-- <div class="collapse" id="address-plus">
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend address__prepend">
                                    <span class="input-group-text font-weight-bold border-0 pr-0 bg-white text__small text__black"
                                          id="city">شهر</span>
                                    </div>
                                    <input type="text"
                                           class="form-control border-left-0 rounded-0 address__input"
                                           aria-describedby="city">
                                </div>
                            </div>

                            <div class="form-group mt-n3">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend address__prepend border-top-0">
                            <span class="input-group-text font-weight-bold border-0 pr-0 bg-white text__small text__black"
                                  id="
                            province">استان</span>
                                    </div>
                                    <input type="text"
                                           class="form-control border-left-0 border-top-0 rounded-0 address__input"
                                           aria-describedby="
                        province">
                                </div>
                            </div>

                            <div class="form-group mt-n3">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend address__prepend border-top-0">
                                    <span class="input-group-text font-weight-bold border-0 pr-0 bg-white text__small text__black"
                                          id="postal-code">کد پستی</span>
                                    </div>
                                    <input type="number"
                                           class="form-control border-left-0 border-top-0 rounded-0 address__input"
                                           aria-describedby="postal-code">
                                </div>
                            </div>

                            <div class="form-group mt-n3">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend address__prepend border-top-0">
                                    <span class="input-group-text font-weight-bold border-0 pr-0 bg-white text__small text__black"
                                          id="phone">تلفن</span>
                                    </div>
                                    <input type="number"
                                           class="form-control border-left-0 border-top-0 rounded-0 address__input"
                                           aria-describedby="phone">
                                </div>
                            </div>

                            <div class="form-group mt-n3 position-relative">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend border-top-0 address__prepend address__special--prepend">
                                    <span class="input-group-text font-weight-bold border-0 pr-0 bg-white text__small text__black"
                                          id="address">آدرس</span>
                                    </div>
                                    <input type="text"
                                           class="form-control border-left-0 border-top-0 rounded-0 address__input address__special--input"
                                           aria-describedby="address">
                                </div>
                                <div class="position-absolute btn__address">
                                    <button class="btn mb-0">
                                        <span>ثبت سفارش</span>
                                    </button>
                                </div>
                            </div>


                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-xl-6 px-0 pl-md-0 pr-xl-4">
                    <div class="address__delivery mr-md-2 mt-2 mt-md-0">
                        <div class="d-flex align-items-center px-2 pt-4 pb-3">
                            <div class="address__icon">
                                <img src="{{ asset('assets/front/icon/delivery method.svg') }}" alt=""
                                     class="p-2">
                            </div>
                            <span class="mr-3 text__black text__medium text__iranyekan--bold">روش تحویل</span>
                        </div>

                        @foreach ($shipping_data as $data)

                            <div class="d-flex justify-content-between py-3 address__border">
                                <label class="text__gray d-flex align-items-center text__medium container mr-0">
                                    <input type="radio" id="method-shipping-{{$data->id}}" name="shipping_method" value="{{$data->id}}" data-shipping-price="{{$data->price}}" data-shipping-days="{{$data->subtitle}}"" {{$loop->iteration == 1 ? 'checked' : ''}}>
                                    <span class="mr-3 text__black method-shipping text__iranyekan--regular" for="method-shipping-{{$data->id}}">{{$data->title . " " . $data->subtitle}}</span>
                                    <span class="checkmark checkmark__address"></span>
                                </label>
                                <div class="d-flex">
                                    <span class="text__medium text__black text__iranyekan--regular">{{$data->price}}</span>
                                    <span class="text__medium text__black mr-2 text__iranyekan--regular"> ریال</span>
                                </div>
                            </div>
                        @endforeach



                        <div class="py-3 address__border">
                            <span class="text-right text__medium text__black text__iranyekan--regular">لطفا روش حمل و نقل مورد نظر خود برای این سفارش را انتخاب نمایید</span>
                        </div>
                    </div>

                    <div class="address__payment mr-md-2">
                        <div class="d-flex align-items-center px-2 pt-4 pb-3">
                            <div class="address__icon">
                                <img src="{{ asset('assets/front/icon/payment method.svg') }}" alt=""
                                     class="p-2">
                            </div>
                            <span class="mr-3 text__black text__medium text__iranyekan--bold">روش پرداخت</span>
                        </div>

                        <div class="border__top address__payment--row">
                            <div class="d-flex justify-content-between py-3 address__payment--online">
                                <label class="text__gray d-flex align-items-center text__medium container ">
                                    <input type="radio" name="payment_method" checked value="1">
                                    <span class="mr-3 text__black payment_method text__iranyekan--regular">پرداخت آنلاین (درگاه بانکی)</span>
                                    <span class="checkmark checkmark__address"></span>
                                </label>
                            </div>
                            <div class="address__payment--vl ml-3"></div>
                            <div class="d-flex justify-content-between py-3 address__payment--cash">
                                <label class="text__gray d-flex align-items-center text__medium container mr-0">
                                    <span class="mr-3 text__black payment_method text__iranyekan--regular">پرداخت نقدی (درب منزل)</span>
                                    <input type="radio" name="payment_method" value="2">
                                    <span class="checkmark checkmark__address"></span>
                                </label>
                            </div>
                        </div>



                        <div class="py-3 address__border">
                            <span class="text-right text__medium text__black text__iranyekan--regular">لطفا روش پرداخت مورد نظر خود برای این سفارش را انتخاب نمایید</span>
                        </div>
                    </div>

                    <div class="address__description mr-md-2">
                        <div class="d-flex align-items-center px-2 pt-4 pb-3">
                            <div>
                                <img src="{{ asset('assets/front/icon/description.svg') }}" alt=""
                                     class="address__description--icon">
                            </div>
                            <span class="font-weight-bold mr-3 text__black text__medium text__iranyekan--bold">توضیحات</span>
                        </div>

                        <div class="py-3 address__border address__description--textarea">
                                        <textarea class="text-justify form-control border-0"
                                                  placeholder="افزودن توضیحاتی در مورد سفارش" rows="8" name="order_notes"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 px-0 text-left interest__button">
                    <button href="javascript:;" type="button" class="btn p-3 border-0 btn__black btn__link go-tab-3">
                        <span class="ml-2 text__small text__iranyekan--bold">تایید و ثبت سفارش</span>
                    </button>
                </div>
            </div>
        </div>

</section>
{{-- address --}}
</div>

<div id="tab-3" style="display: none">
    {{-- order complete --}}
    <section class="title">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-between w-100 py-2 px-4 title__green">
                        <span class="text-white text__medium text__iranyekan--regular">تکمیل سفارش</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="order">
        <div class="container-fluid">

            <div class="row mt-4">
                <div class="col-12 px-0">
                    <h6 class="text__green text__iranyekan--regular">افزودن کالاها به سبد خرید به معنی رزرو کالا برای شما نیست.برای ثبت
                        سفارش باید مراحل خرید را تکمیل نمایید.</h6>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 px-0">
                                <span class="font-weight-bold text__black text__small text__iranyekan--regular">لطفا اطلاعات زیر را بررسی کنید و در صورت
                                    صحیح بودن آن ها، جهت تکمیل سفارش و تسویه حساب روی کلید ورود به درگاه بانکی کلیک
                                    کنید.</span>
                </div>
            </div>

            <div class="row mt-4 order__user">
                <div class="col-12 col-xl-6 order__user--information order__address">
                    <div class="d-flex align-items-center px-2 pt-4 pb-3">
                        <div class="address__icon">
                            <img src="{{ asset('assets/front/icon/location.svg') }}" alt="" class="p-2">
                        </div>
                        <span class="font-weight-bold mr-3 text__black text__medium text__iranyekan--bold">آدرس شما</span>
                    </div>
                    <div class="d-flex py-3 border__top">
                        <span class="text__medium text__blac text__iranyekan--regular">آدرس:</span>
                        <span class="text-justify text__medium text__black text__iranyekan--light" id="shipping_address"></span>
                    </div>
                    <div class="d-sm-flex justify-content-sm-between border__top">
                        <div class="w-50 d-flex py-3">
                            <span class="text__medium text__black text__iranyekan--regular">کد پستی:</span>
                            <span class="text__medium text__black text__iranyekan--light" id="shipping_post_code"></span>
                        </div>
                        {{-- <div class="address__payment--vl mx-3"></div> --}}
                        <div class="w-50 d-flex justify-content-start py-3 pr-sm-3 order__address--tel">
                            <span class="text__medium text__black text__iranyekan--regular">شماره تلفن:</span>
                            <span class="text__medium text__black text__iranyekan--light" id="shipping_phone"></span>
                        </div>
                        {{-- <div class="address__payment--vl mx-3"></div>
                        <div class="d-flex py-3">
                            <span class="text__medium text__black text__iranyekan--regular">ایمیل:</span>
                            <span class="text__medium text__black text__iranyekan--light" id="shipping_email"></span>
                        </div>
                        --}}
                    </div>
                    <div class="border__top">
                        <div class="d-flex py-3">
                            <span class="text__medium text__black text__iranyekan--regular">ایمیل:</span>
                            <span class="text__medium text__black text__iranyekan--light" id="shipping_email"></span>
                        </div>
                    </div>
                    <div class="py-4 border__top">
                        <h6 class="text__green text__iranyekan--regular">کالای شما بین <span id="shipping_days text__iranyekan--regular"></span> روز کاری دیگر به دست شما خواهد رسید.</h6>
                    </div>
                </div>
                <div class="col-12 col-xl-6 order__user--information order__delivery">
                    <div class="row">
                        <div class="col-12 order__responsive--method">
                            <div class="d-flex align-items-center px-2 pt-4 pb-3">
                                <div class="address__icon">
                                    <img src="{{ asset('assets/front/icon/delivery method.svg') }}" alt="" class="p-2">
                                </div>
                                <span class="mr-3 text__black text__medium text__iranyekan--bold">روش تحویل</span>
                            </div>
                            <div class="d-flex py-4 order__responsive--border">
                                <!--<p class="text__medium text__black" >تحویل رایگان در درب منزل (3 الی 7 روز کاری)</p>
                                 <p class="mx-2 text__medium text__black">/</p>-->
                                <span class="text__medium text__black text__iranyekan--light" id="shipping_method"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center py-2 order__payment--description">
                        <div class="col-12 col-md-6 pr-2 pl-4 order__responsive--method">
                            <div class="d-flex align-items-center py-3">
                                <div class="address__icon">
                                    <img src="{{ asset('assets/front/icon/payment method.svg') }}" alt="" class="p-2">
                                </div>
                                <span class="mr-3 text__black text__medium text__iranyekan--bold">روش پرداخت</span>
                            </div>

                            <div class="border__top py-4">
                                <span class="text__black text__medium text__iranyekan--light" id="payment_method"></span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pl-0 pr-4 border__right order__responsive--method">
                            <div class="d-flex align-items-center py-3">
                                <div>
                                    <img src="{{ asset('assets/front/icon/description.svg') }}" alt=""
                                         class="address__description--icon">
                                </div>
                                <span class="mr-3 text__black text__medium text__iranyekan--bold">توضیحات</span>
                            </div>

                            <div class="border__top py-4">
                                <span class="text__black text__medium text__iranyekan--light"  id="order_notes">توضیحاتی در مورد کالا وجود ندارد.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row order__commodity">
                @foreach ($products as $product)
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-4 py-lg-3 mt-3 mt-lg-0 py-2 d-flex justify-content-lg-start justify-content-between px-0 order__border--bottom">
                                <span class="font-weight-bold text__medium text__black text__iranyekan--regular">نام کالا: </span>
                                <span class="text__medium text__black text__iranyekan--light">{{ $product['item']['name'] }}</span>
                            </div>
                            <div class="col-12 col-lg-4 py-lg-3 py-1 d-flex justify-content-lg-start justify-content-between px-0 order__border--bottom">
                                <span class="font-weight-bold pr-lg-3 text__medium text__black order__border--right text__iranyekan--regular"> نوع کالا: </span>
                                <span class="text__medium text__black text__iranyekan--light">{{ __($product['item']['type']) }}</span>
                            </div>
                            <div class="col-12 col-lg-4 py-lg-3 py-2 d-flex justify-content-lg-start justify-content-between px-0 order__border--bottom">
                                <span class="font-weight-bold pr-lg-3 text__medium text__black order__border--right text__iranyekan--regular">تعداد: </span>
                                <span class="text__medium text__black text__iranyekan--light">{{ $product['qty'] }} عدد</span>
                            </div>
                        </div>

                        <div class="row order__border--top">
                            <div class="col-12 col-lg-4 py-lg-3 py-2 d-flex justify-content-lg-start justify-content-between px-0 order__border--bottom">
                                <span class="font-weight-bold text__medium text__black text__iranyekan--regular">گارانتی کالا: </span>
                                <span class="text__medium text__black text__iranyekan--light">{{ !empty($product['values']) ? __($product['values']) : 'بدون گارانتی' }}</span>
                            </div>
                            <div class="col-12 col-lg-4 py-lg-3 py-1 d-flex justify-content-lg-start justify-content-between px-0 order__border--bottom">
                                <span class="font-weight-bold pr-lg-3 text__medium text__black order__border--right text__iranyekan--regular">قیمت کالا: </span>
                                <div class="d-flex flex-row-reverse">
                                    <span class="text__medium mx-2 text__iranyekan--light">{{ number_format((int)$product['item']['price'])}}</span>
                                    <span class="text__medium text__iranyekan--light">RL</span>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 pr-3 py-lg-3 py-1 d-flex justify-content-lg-start justify-content-between px-0">

                            </div>
                        </div>

                        <div class="row pb-5 order__border--top">
                            <div class="col-12 py-3 d-flex justify-content-between px-0 order__border--bottom">
                                <span class="text__medium text__black text__iranyekan--bold">قیمت مجموع کالاها: </span>
                                <div class="d-flex flex-row-reverse">
                                    <span class="text__large text__iranyekan--bold mx-2">{{ number_format((int)$product['item']['price'] * $product['qty'])  }}</span>
                                    <span class="text__large text__iranyekan--bold">RL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="w-100 d-md-flex justify-content-md-between order__box">
                <div class="d-flex align-items-center justify-content-between order__payable">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/front/icon/cart-black.svg') }}" alt=""
                             class="header__desktop--icon--cart p-2">
                        <span class="font-weight-bold text__medium text__black text__iranyekan--bold">مبلغ قابل پرداخت: </span>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <span class="text__large text__iranyekan--bold mx-2" id="priceAndShipping"></span>
                        <span class="text__large text__iranyekan--bold">RL</span>
                    </div>
                </div>
                <div class="d-flex pl-0 pr-md-3 order__btn">
                    <button type="button" class="w-50 btn py-3 px-1 mb-0 border-0 rounded-0 btn__black btn__link go-tab-2 order__btn--black">
                        <span class="ml-2 text__small text__iranyekan--bold">بازگشت به صفحه قبل</span>
                    </button>
                    <button type="submit" id="final-btn"
                            class="w-50 btn py-3 px-2 mb-0 border-0 btn__green btn__green--leftrounded btn__link">
                        <span class="ml-2 text__small text__iranyekan--bold">ورود به درگاه بانکی</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{-- order complete --}}

</div>


