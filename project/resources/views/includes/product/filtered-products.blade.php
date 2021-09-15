        <div>
            @if (count($prods) > 0)
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    @foreach ($prods as $key => $prod)
                        <div class="col px-3 my-3">
                                {{-- <div class="card h-100 border-0">
                                    <div class="products__card--img products__card--img--mobile">
                                        <img src="{{ $prod->photo ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" alt="" class="card-img h-auto">
                                    </div>

                                    <div class="card-img-overlay">
                                        <div class="px-3 d-inline-block favorites__cart mt-2">
                                            <div class="d-flex">
                                                <a href="" class="text-decoration-none">
                                                    <img src="{{ asset('assets/front/icon/heart-white.svg') }}" alt="" class="my-2 ml-2 favorites__cart--img">
                                                </a>
                                                <a href="" class="text-decoration-none">
                                                    <img src="{{ asset('assets/front/icon/cart.svg') }}" alt="" class="my-2 favorites__cart--img">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card h-100 mt-3 border-0">
                                    <div class="products__card--title">
                                        <a href="{{ route('front.product', $prod->slug) }}">
                                            <h5 class="font-weight-bold text__black">{{$prod->showName()}}</h5>
                                        </a>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="products__card--text">
                                                <p class="font-weight-bold text__medium">{{$prod->category->name}}</p>
                                                @if($prod->tags)
                                                    <p class="mt-1 text__medium">{{implode(' , ',$prod->tags)}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="row">
                                                @if(!empty($prod->color))
                                                    <div class="col-12">
                                                        <div class="d-flex justify-content-end products__card--color">
                                                            @foreach (collect($prod->color)->slice(0,2) as $color)
                                                                <div class="products__card--color--color mr-2" style="background-color: {{$color}}"></div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <div class="d-flex justify-content-end products__card--color">
                                                            <div class="mr-2 products__card--text">
                                                                @php($count = collect($prod->color)->slice(3)->count())
                                                                <p>{{$count ? $count . " +" : ""}}</p>
                                                            </div>
                                                            @foreach (collect($prod->color)->slice(2,1) as $color)
                                                                <div class="products__card--color--color mr-2" style="background-color: {{$color}}"></div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <div class="d-flex justify-content-between py-3 px-3 products__card--price">
                                                <p class="text__medium">قیمت کالا:</p>
                                                <div class="d-flex flex-row-reverse">
                                                    <p class="text__medium mx-2">{{number_format($prod->price)}}</p>
                                                    <p class="text__medium">RL</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            <a href="{{ route('front.product', $prod->slug) }}">
                            <div class="card h-100 border-0">
                                <div class="products__card--img products__card--img--mobile">
                                    <img src="{{ $prod->photo ? asset('assets/images/products/'.$prod->photo):asset('assets/images/noimage.png') }}" alt="" class="card-img card-img-top">
                                    <div class="card-img-overlay card-img-overlay-product-mobile">
<!--                                      <div class="px-3 d-inline-block favorites__cart mt-2">
                                            <div class="d-flex">
                                                <a href="" class="text-decoration-none">
                                                    <img src="{{ asset('assets/front/icon/heart-white.svg') }}" alt="" class="my-2 ml-2 favorites__cart&#45;&#45;img">
                                                </a>
                                                <a href="" class="text-decoration-none">
                                                    <img src="{{ asset('assets/front/icon/cart.svg') }}" alt="" class="my-2 favorites__cart&#45;&#45;img">
                                                </a>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>

                                <div class="card-body px-0">
                                    <div class="card-title products__card--title">

                                            <h5 class="text__iranyekan--bold--ennum text__black">{{$prod->showName()}}</h5>
                                    </div>

                                    <div class="card-text">
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="products__card--text">
                                                    <span class="font-weight-bold d-block text__medium">{{$prod->category->name}}</span>
                                                    @if($prod->tags)
                                                        <span class="mt-1 d-block text__medium">{{--{{implode(' , ',$prod->tags)}}--}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="row">
                                                    {{--@if(!empty($prod->color))
                                                        <div class="col-12">
                                                            <div class="d-flex justify-content-end products__card--color">
                                                                @foreach (collect($prod->color)->slice(0,2) as $color)
                                                                    <div class="products__card--color--color mr-3" style="background-color: {{$color}}"></div>
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mt-3">
                                                            <div class="d-flex justify-content-end products__card--color">
                                                                <div class="mr-2 products__card--text">
                                                                    @php($count = collect($prod->color)->slice(3)->count())
                                                                    <p>{{$count ? $count . " +" : ""}}</p>
                                                                </div>
                                                                @foreach (collect($prod->color)->slice(2,1) as $color)
                                                                    <div class="products__card--color--color mr-2" style="background-color: {{$color}}"></div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endif--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer px-0 bg-white border-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between py-3 px-3 products__card--price">
                                                <span class="text__medium">قیمت کالا:</span>
                                                <div class="d-flex flex-row-reverse">
                                                    <span class="text__medium mx-2">{{number_format($prod->price)}}</span>
                                                    <span class="text__medium">RL</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            {{--pagination start--}}
                    {!! $prods->appends(['search' => request()->input('search')])->links() !!}
            {{--pagination end--}}
            @else
                <div class="col-lg-12">
                    <div class="page-center">
                        <h4 class="text-center">{{ 'محصولی پیدا نشد'}}</h4>
                    </div>
                </div>
            @endif
        </div>
        {{--<section id="pagination">
            <div class="container-fluid">
                <div class="row my-5">
                    <div class="col-12 px-0">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination d-flex justify-content-end">
                                <li class="page-item"><a class="page-link border-0 text__gray text__medium pagination__link" href="#">صفحه بعد</a></li>
                                <li class="page-item">
                                    <a class="page-link pagination__next text__gray text__medium pagination__link border-0" href="#" aria-label="Next">
                                        <span aria-hidden="true">❮ </span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link border-0 text__gray text__medium pagination__link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link border-0 text__gray text__medium pagination__link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link border-0 text__gray text__medium pagination__link" href="#">1</a></li>
                                <li class="page-item">
                                    <a class="page-link border-0 text__gray text__medium pagination__link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">❯</span>
                                    </a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>--}}

        <div class="row my-3">
            <div class="col-md-12 d-flex justify-content-between">
                <h6 class="font-weight-bold option__text--fa">تخفیف آکام پارس</h6>
                <h6 class="font-weight-bold option__text--en">AkamPars Discount</h6>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

            @if (!empty($discount_products))
                @foreach ($discount_products as $prod)
                    <div class="col px-3 my-3">
                        <div class="card h-100 border-0">
                            <div class="products__card--img">
                                <img src="{{ $prod->photo ? asset('assets/images/products/'.$prod->photo):asset('assets/images/noimage.png') }}" alt="" class="card-img">
                                <div class="px-4 py-2 d-inline-block discount__tag">
                                    <span class="text__large">{{(int)(100 - (($prod->price / $prod->previous_price) * 100))}}% -</span>
                                </div>
                                <div class="card-img-overlay card-img-overlay-discount">
<!--                                    <div class="px-3 d-inline-block favorites__cart mt-2">
                                        <div class="d-flex">
                                            <a href="" class="text-decoration-none">
                                                <img src="{{ asset('assets/front/icon/heart-white.svg') }}" alt="" class="my-2 ml-2 favorites__cart&#45;&#45;img">
                                            </a>
                                            <a href="" class="text-decoration-none">
                                                <img src="{{ asset('assets/front/icon/cart.svg') }}" alt="" class="my-2 favorites__cart&#45;&#45;img">
                                            </a>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                            <div class="card-body px-0">
                                <div class="card-title products__card--title">
                                    <h5 class="font-weight-bold">
                                        <a href="{{ route('front.product', $prod->slug) }}" class="text-decoration-none text__black text__iranyekan--bold--ennum">{{$prod->showName()}}</a>
                                    </h5>
                                </div>
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="products__card--text">
                                                <span class="font-weight-bold text__medium">{{$prod->category->name}}</span>
                                                @if($prod->tags)
                                                    <span class="mt-1 text__medium">{{implode(' , ',$prod->tags)}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-3 pt-2">
                                            <div class="row">
                                                @if(!empty($prod->color))
                                                    <div class="col-12">
                                                        <div class="d-flex justify-content-end products__card--color">
                                                            @foreach (collect($prod->color)->slice(0,2) as $color)
                                                                <div class="products__card--color--color mr-3" style="background-color: {{$color}}"></div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <div class="d-flex justify-content-end products__card--color">
                                                            <div class="mr-2 products__card--text">
                                                                @php($count = collect($prod->color)->slice(3)->count())
                                                                <span>{{$count ? $count . " +" : ""}}</span>
                                                            </div>
                                                            @foreach (collect($prod->color)->slice(2,1) as $color)
                                                                <div class="products__card--color--color mr-3" style="background-color: {{$color}}"></div>
                                                            @endforeach
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
                                        <div class="d-flex justify-content-between py-3 px-3">
                                            <span class="text__large">قیمت کالا:</span>
                                            <div class="">
                                                <div class="d-flex flex-row-reverse position-relative">
                                                    <span class="text__large mx-2 text__number">{{number_format($prod->previous_price)}}</span>
                                                    <span class="text__large">RL</span>
                                                </div>
                                                <div class="diagonel-line products__card--diagonel"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-1">
                                        <div class="d-flex justify-content-between py-3 px-3 products__card--price">
                                            <span class="text__medium">قیمت با تخفیف:</span>
                                            <div class="d-flex flex-row-reverse">
                                                <span class="text__medium mx-2 text__number">{{number_format($prod->price)}}</span>
                                                <span class="text__medium">RL</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>

        @if(isset($ajax_check))


            <script type="text/javascript">


                // Tooltip Section


                $('[data-toggle="tooltip"]').tooltip({
                });
                $('[data-toggle="tooltip"]').on('click',function(){
                    $(this).tooltip('hide');
                });




                $('[rel-toggle="tooltip"]').tooltip();

                $('[rel-toggle="tooltip"]').on('click',function(){
                    $(this).tooltip('hide');
                });


                // Tooltip Section Ends

            </script>

        @endif