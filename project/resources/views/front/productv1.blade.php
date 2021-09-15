@extends('layouts.front')

@section('css')
<link rel="stylesheet" href="{{asset('assets/front/css/rtl/product-page.css')}}">
@endsection

@section('content')
<div class="container-fluid px-5">
    <!-- /* *****product-start***** */ -->
            <div class="row mt-5 mx-md-5">
                <div class="col-12 col-md-5 px-0  pr-1 d-md-flex justify-content-md-between product-zoom">
                    <div class="container-vertical-tab d-flex flex-row-reverse w-100" id="container-vertical-tab-responsive">
                        @if (!empty($productt->galleries->toArray()))
                            <ul class="tab-navigation-vertical d-block mr-2">
                                
                                @foreach($productt->galleries->slice(0,4) as $gal)
                                    @if ($loop->iteration == 1)
                                        @php($src = filter_var($productt->photo, FILTER_VALIDATE_URL) ?$productt->photo:asset('assets/images/products/'.$productt->photo))
                                    @else
                                        @php($src = asset('assets/images/galleries/'.$gal->photo))
                                    @endif
                                    <li id="accessories-responsive">
                                        <div class="mb-2 accessories">
                                            <img src="{{$src}}" alt="" class="p-2">
                                        </div>
                                    </li>
                                @endforeach
                                <div class="more-images" id="more-image-responsive">
                                    <a href="#" class="text-decoration-none d-flex flex-column px-0" data-toggle="modal" data-target="#more-pictures-product">
                                        <div class="d-flex justify-content-center mt-md-n1 mt-lg-n2">
                                            <img src="{{asset('assets/front/images/hahoot/flash down.svg')}}" alt="" class="p-2">
                                        </div>
                                        <div class="text-center mt-n3">
                                            <span>تصاویر بیشتر</span>
                                            <span>از محصول</span>
                                        </div>
                                    </a>
                                </div>
                            </ul>   
                            
                            
                            <div class="product mr-3 w-100">
                                
                                @foreach($productt->galleries->slice(0,4) as $gal)
                                @if ($loop->iteration == 1)
                                @php($src = filter_var($productt->photo, FILTER_VALIDATE_URL) ?$productt->photo:asset('assets/images/products/'.$productt->photo))
                                @else
                                    @php($src = asset('assets/images/galleries/'.$gal->photo))
                                @endif
                                <div class="tab-container-vertical">
                                    <div class="mb-1 mb-md-2">
                                        <img src="{{$src}}" alt="Magnetic-charge" class="zoomm" id="zoom" data-title="Zoom Image" data-zoom-image="{{$src}}"/>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            
                            @endif
                            
                            <div class="tab-container-vertical w-100 mr-md-4 mb-sm-3">
                                <div class="mb-1 mb-md-2">
                                    <img src="{{filter_var($productt->photo, FILTER_VALIDATE_URL) ?$productt->photo:asset('assets/images/products/'.$productt->photo)}}" alt="Magnetic-charge" class="zoomm" id="zoom" data-title="Zoom Image" data-zoom-image="{{filter_var($productt->photo, FILTER_VALIDATE_URL) ?$productt->photo:asset('assets/images/products/'.$productt->photo)}}"/>
                                </div>
                            </div> 
                    </div>
                    @if ($productt->previous_price)
                        <div class="tag-pink mt-2">
                            <span class="font-weight-bold text-white ml-2">{{(int)(100 - ($productt->price / $productt->previous_price) * 100) . " %"}}</span>
                        </div>
                    @endif
                    <div class="tag-blue d-flex justify-content-center align-items-center mt-2">
                        <img src="{{asset('assets/front/images/hahoot/Magnetic-charge.webp')}}" alt="share">
                        <a href="#" class="text-decoration-none">
                            <span class="font-weight-bold text-white ml-2">Share</span>
                        </a>
                    </div>
                    
                </div>
    <!-- /* *****product-end***** */ -->
    
    <!-- /* *****product-text-start***** */ -->
                <div class="col-12 col-md-7 px-0 product-text pl-1">
                    <div class="text-right d-md-flex flex-row-reverse justify-content-between">
                        <div>
                            <input type="hidden" id="product_id" value="{{$productt->id}}">
                            <h6 class="font-weight-bold">{{ $productt->name }}</h6>
                            <p>{{$productt->category->name}}</p>
                        </div>
                        <div class="text-md-left" style="direction:rtl">
                            @if( $productt->sku != null )
                            <p class="">
                                {{ 'سریال محصول' }}: <span class="idno">{{ $productt->sku }}</span>
                            </p>
                            @endif
                        </div>
                    </div>
    
                    <div class=" d-block product-selsect-information-dl">
                        @if (!empty($productt->color))
                        <hr class="line">
<!-- Color selection -start -->
                        <div class="my-n2 d-flex flex-row-reverse justify-content-between align-items-center py-2">
                            <div>
                                <span>انتخاب رنگ</span>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                
                                    @foreach($productt->color as $key=>$value)
                                    <div class="custom-control  custom-radio custom-control-inline d-flex align-items-center mr-3" style="border:1px solid {{$value}};color:{{$value}}" >
                                    <input type="radio" name="color" id="{{$key}}" class="custom-control-input" data-color="{{$value}}" {{$loop->iteration == 1 ? 'checked' : ''}}>
                                    <label class="custom-control-label p-1" for="{{$key}}">{{$key}}</label>
                                    </div>
                                    @endforeach 

                            </div>
                        </div>
                        @endif                                                        
<!-- Color selection -end -->
<!-- Guarantee selection- start -->
                        @if (isset(json_decode($productt->attributes,true)['warranty_type']))
                        <hr class="line">
                        <div class="my-n3 d-flex flex-row-reverse justify-content-between align-items-center py-2">
                            <div class="form-group w-100 d-flex flex-row-reverse justify-content-between align-items-center mb-0">
                                <div class="input-group d-flex flex-row-reverse align-items-center">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text bg-white border-0 px-0 mt-1" >:انتخاب گارانتی</span>
                                    </div>
                                    
                                    <select class="form-control border-0 align-items-center shadow-none " id="guarantee-selection">
                                        <?php $warranty = json_decode($productt->attributes,true)['warranty_type'];?>
                                        @foreach ($warranty['values'] as $key=>$item)
                                            <option value="{{$item}}" data-key="warranty_type" data-price="{{$warranty['prices'][$key]}}" class="product-attr">{{__($item)}}</option>
                                        @endforeach 
                                        </select>
                                    </div>
                                    
                            </div>
                        </div>
                        @endif
<!-- Guarantee selection -end-->
<!-- Number of goods-start -->
                        <hr class="line">
                        <div class="my-n3 d-flex flex-row-reverse justify-content-between align-items-center py-2">
                            <div class="form-group d-flex justify-content-center w-50 mb-0">

                                <div class="d-flex numbering-all-dl mt-1 ml-2">
                                    <input type="number" id="quantity" name="quantity" min="1" max="{{!empty($productt->stock) ? $productt->stock : 1000}}" class="mr-2 mt-1 rounded-0 numbering-dl" value="1">
                                    <label for="quantity" class="mt-2">عدد</label>
                                </div>

                                <div class="input-group d-flex flex-row-reverse justify-content-between">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text bg-white border-0 px-0 mt-1" id="number-of-goods">:تعداد کالا</span>
                                    </div>
                                </div>

                            </div>
    
                            <div class="my-n1 d-flex flex-row-reverse justify-content-between w-50 border-right">
                                <div class="mt-2">
                                    <span class="pr-2">:موجودی</span>
                                </div>
                                <div class="">
                                    <span class="ml-n2">
                                        @if($productt->type == 'Physical')
                                            @if($productt->emptyStock())
                                                <span>&#x2573</span>
                                                {{ 'در انبار موجود نیست ' }}
                                            @else
                                                <img src="{{asset('assets/front/images/hahoot/tik.svg')}}" alt="tik" class="tik">
                                                {{ 'در انبار موجود است' }}
                                            @endif
                                        @else
                                        <img src="{{asset('assets/front/images/hahoot/tik.svg')}}" alt="tik" class="tik">
                                        {{ 'در انبار موجود است' }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
<!-- Number of goods-end -->
<!-- commodity prices- start-->
                        <hr class="line">
                        <input type="hidden" value="{{$productt->price}}" id="product_price">
                        <div class="my-2 d-flex flex-row-reverse justify-content-between align-items-center py-2">
                            <div class="{{$productt->previous_price ? 'w-50' : 'w-100'}} mt-n3 d-flex justify-content-between">
                                <div>
                                    <Span class="pl-2" id="{{empty($productt->previous_price) ? 'sizeprice' : '' }}">{{$productt->previous_price ?  number_format((int)$productt->previous_price) . " RL" : number_format((int)$productt->price)." RL"}}</Span>
                                </div>
                                <div> 
                                    <span>:قیمت کالا</span>
                                </div>
                            </div>
                            @if ($productt->previous_price)
                                <div class="w-50 d-flex justify-content-between border-right">
                                    <div>
                                        <p id="sizeprice">{{number_format((int)$productt->price) . " RL"}}</p>
                                    </div>
                                    <div>
                                        <p class="pr-2">با احتساب {{(int)(100 - ($productt->price / $productt->previous_price) * 100) . " %"}}  تخفیف</p>
                                    </div>
                                    
                                </div>
                            @endif
                        </div>
<!-- commodity prices- end-->
                        <div class="add d-flex flex-row-reverse justify-content-between mt-4">
<!-- add to cart-start  -->
                            @if (!$productt->emptyStock())
                                <a href="javascript:;" id="addcrt"  class="add-to-cart text-decoration-none w-100 p-2 text-white d-flex flex-row-reverse align-items-center">
                                    <img src="{{asset('assets/front/images/hahoot/add-to-cart.svg')}}" alt="add-to-cart">
                                    <div class="add-vl mx-2"></div>
                                    <span class="text-white" >افزودن به سبد خرید</span>
                                </a>
                            @endif
                            
<!-- add to cart-end  -->
<!-- add to wish list-start  -->
                            <a href="#" class="add-to-wish-list bg-primary w-100 p-2 text-decoration-none text-white d-flex flex-row-reverse align-items-center">
                                <img src="{{asset('assets/front/images/hahoot/add-to-wish-list.svg')}}" alt="add-to-wish-list">
                                <div class="add-vl mx-2"></div>
                                <span class="text-white">افزودن به لیست دلخواه</span>
                            </a>
<!-- add to wish list-end  -->
                        </div>
                    </div>               
                </div>

            </div>
    <!-- /* *****product-text-end***** */ -->
    
  
    
    <!-- /* خرید آسان و سریع  start*/ -->
            <div class="row main-easy-fast-shopping mx-md-5 text-center text-muted mt-5">
                <div class="col-12 d-flex justify-content-center justify-content-md-around border border-muted py-3 ">
                    <div class="ml-n3 mr-3">
                        <img src="{{asset('assets/front/images/hahoot/Support.svg')}}" alt="support">
                        <h6>پشتیبانی</h6>
                    </div>
                    <div class="mr-4">
                        <img src="{{asset('assets/front/images/hahoot/gift card.svg')}}" alt="gift card">
                        <h6> کارت هدیه هاهوت</h6>
                    </div>
                    <div class="mr-4">
                        <img src="{{asset('assets/front/images/hahoot/Pay on the spot.svg')}}" alt="Pay on the spot">
                        <h6>پرداخت در محل</h6>
                    </div>
                    <div class="mr-4">
                        <img src="{{asset('assets/front/images/hahoot/Guaranteed return.svg')}}" alt="Guaranteed return">
                        <h6>7روز ضمانت برگشت</h6>
                    </div>
                    <div class="mr-n3 mr-md-n1">
                        <img src="{{asset('assets/front/images/hahoot/Express delivery.svg')}}" alt="Express delivery">
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
    
    <!-- goods introduction-start -->
            @if (isset($productt->details))
                <hr class="line mx-md-5 mx-n4 px-0">
                <div class="row mx-md-5">
                    <div class="col-12 mt-2 px-0 goods-introduction d-md-flex justify-content-md-between flex-md-row-reverse">   
                        <div class="text-right">
                            <h6 class="font-weight-bold">ﻣﻌﺮﻓﯽ ﮐﺎﻻ </h6>
                            <span>{{$productt->showName()}}</span>
                        </div>
                        <div class="d-none d-md-inline-block text-md-left">
                            <h6 class="font-weight-bold">Product Introduction</h6>
                        </div>
                    </div>
                </div>
        
                <div class="row mx-md-5">
                    <div class=" col-12 mt-2 px-0 goods-introduction">
                        <p>
                            {!! $productt->details !!}
                        </p>
                    </div>
                </div>
            @endif
    <!-- goods introduction-end -->
    
    
    <!-- product specification-start -->
            @if (!empty($productt->specifications))
            <hr class="line mx-md-5 mx-n4 px-0">
            <div class="row mx-md-5">
                <div class="col-12 mt-2 px-0 goods-introduction d-md-flex justify-content-md-between flex-md-row-reverse">   
                    <div class="text-right">
                        <h6 class="font-weight-bold">ﻣشخصات ﮐﺎﻻ </h6>
                        <span>{{$productt->showName()}}</span>
                    </div>
                    <div class="d-none d-md-inline-block text-md-left">
                        <h6 class="font-weight-bold">Product Speciﬁcations</h6>
                    </div>
                </div>
            </div>
    
            <div class="row mx-md-5 product-specification">
                <div class="col-12 mt-2 px-0">
                    <table class="table table-sm table-bordered border-left-0 border-right-0" >
                        <tbody>
                               
                                @foreach (json_decode($productt->specifications) as $key=>$value)
                                <tr>
                                    <th>{{$key}}</th>
                                    <td>{{$value}}</td>
                                </tr>
                                @endforeach 
                            
                        </tbody>
    
                    </table>
    
                </div>
    
            </div>
            @endif
    <!-- product specification-end -->
    
    <!-- Related Products-start -->
            @php($similar_products = $productt->category->products()->where('status','=',1)->where('id','!=',$productt->id)->take(4)->get())
            @if ($similar_products->count())
            <div class="row mx-md-5">
                <div class="col-12 mt-2 px-0 related-products d-md-flex justify-content-md-between flex-md-row-reverse">   
                    <div class="text-right">
                        <h6 class="font-weight-bold">محصولات مرتبط</h6>
                        <span>پیشنهادات هاهوت به شما</span>
                    </div>
                    <div class="d-none d-md-inline-block text-md-left">
                        <h6 class="font-weight-bold">Related Products</h6>
                        <span>Our Opinion</span>
                    </div>
                </div>
            </div>
    
            <div class="row d-flex mx-md-5 my-5">
                @foreach($productt->category->products()->where('status','=',1)->where('id','!=',$productt->id)->take(4)->get() as $prod)
                <div class="col-md-4 col-lg-3 
                    @if($loop->iteration == 1)
                        {{'pl-0 d-none d-lg-block'}}
                    @elseif($loop->iteration == 2)
                        {{'pl-md-0 pl-lg-4'}}
                    @elseif($loop->iteration == 4)
                        {{'pr-0'}}
                    @endif
                ">
                    <div class="card general-image-all border-0">
                        <div class="general-image-all-overlay position-relative">
                            <img src="{{ $prod->photo ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" alt="device" class="card-img-top border">
                            <div class="overlay-test position-absolute"></div>
                        </div>
                        <div class="card-img-overlay general-image-all-myhahoot-card px-2 ">
                                <div class="card-text d-flex align-items-end justify-content-around">
                                    <a href="#" target="_blank" class="text-decoration-none">
                                        <span>سبد خرید</span>
                                        <img src="{{asset('assets/front/images/hahoot/my shopping cart.svg')}}" alt="My Shopping Cart"> 
                                    </a> 
                                    <div class="card-img-overlay-vl  mx-1"></div>
                                    <a href="#" target="_blank" class="text-decoration-none">
                                        <span>هاهوت من</span>
                                        <img src="{{asset('assets/front/images/hahoot/my hahoot.svg')}}" alt="My Hahoot">
                                    </a>
                                </div>
                            </div>
                        <div class="card-header px-0 bg-white border-0 text-right">
                            <h5 class="font-weight-bold product-title"><a href="{{ route('front.product', $prod->slug) }}" class="text-muted text-decoration-none">{{$prod->showName()}}</a></h5>
                        </div>
                        <div class="card-body px-0 general-image-body mt-n4 text-right">   
                            <div class="d-flex justify-content-between"> 
                                <div>
                                    @if (!empty($prod->color))
                                        @foreach ($prod->color as $name=>$color)
                                        <span style="background-color: {{$color}};width:1rem;height:1rem;" class="d-inline-block"></span>
                                        @endforeach
                                    @endif   
                                </div>
                                <span>{{$prod->category->name}}</span>
                            </div>
                            
                        </div>
                        <div class="card-footer border p-1 bg-white general-image-footer  d-flex justify-content-between align-items-center">
                            <p class="mt-2 mb-1">{{number_format((int)$prod->price)}} RL</p>
                            <span class="mb-0">:قیمت کالا</span>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
            
        
    <!-- Related Products-end -->
    
    
            <div class="row mx-md-5">
                <div class="col-12 px-0 d-flex align-items-center more-product-all">
                    <div class="ml-n4">
                        <img src="{{asset('assets/front/images/hahoot/more-product.svg')}}" alt="more-procduct" class="more-product">
                    </div>
                    <div>
                        <span>محصولات بیشتر</span>
                    </div>
                </div>
            </div>
            @endif
    </div>



    {{-- modal more-image class --}}
    <div class="modal fade" id="more-pictures-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body container">
                <div class="container px-0">
                    <div class="product">
                        @foreach($productt->galleries as $gal)
                            @if ($loop->iteration == 1)
                                @php($src = filter_var($productt->photo, FILTER_VALIDATE_URL) ?$productt->photo:asset('assets/images/products/'.$productt->photo))
                            @else
                                @php($src = asset('assets/images/galleries/'.$gal->photo))
                            @endif
                            <div class="tab-container rounded-0">
                                <div class="mb-1 mb-md-2">
                                    <img src="{{$src}}" alt="Magnetic-charge" class="zoomm p-2" id="zoom" data-title="Zoom Image" data-zoom-image="{{$src}}"/>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <ul class="tab-navigation d-flex justify-content-between mt-4">
                        @foreach($productt->galleries as $gal)
                                @if ($loop->iteration == 1)
                                    @php($src = filter_var($productt->photo, FILTER_VALIDATE_URL) ?$productt->photo:asset('assets/images/products/'.$productt->photo))
                                @else
                                    @php($src = asset('assets/images/galleries/'.$gal->photo))
                                @endif
                                <li>
                                    <div class="mb-1 mb-md-2  accessories">
                                        <img src="{{$src}}" alt="" class="p-2">
                                    </div>
                                </li>
                        @endforeach
                        
                    </ul>
                </div> 
            </div>
            
          </div>
        </div>
      </div>




</div> 
@endsection

@section('js')
    <script src='{{asset('assets/front/js/elevatezoom-master/jquery-1.8.3.min.js')}}'></script>
    <script src='{{asset('assets/front/js/elevatezoom-master/jquery.elevateZoom-3.0.8.min.js')}}'></script>
    <script src='{{asset('assets/front/js/elevatezoom-master/jquery.elevatezoom.js')}}'></script>
    <script src="{{asset('assets/front/js/product-page.js')}}"></script>
    <script>
        var sizes = "";
        var size_qty = "";
        var size_price = "";
        var size_key = "";
        var total = "";
        var colors = "";
        var stock = $("#stock").val();
        var keys = "";
        var values = "";
        var prices = "";
    </script>
    <script>
        $(document).on('change','#guarantee-selection',function(){

            var total = 0;
            total = getAmount();
            $('#sizeprice').html(addCommas(total));

        });

        function getAmount()
        { 
            var total = 0;
            var value = parseFloat($('#product_price').val());

            var datas = $(".product-attr:selected").map(function() {
                return $(this).data('price');
            }).get();

            var data;
            for (data in datas) {
            total += parseFloat(datas[data]);
            }
            total += value;
            return total;
        } 

        function addCommas(nStr)
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }

    </script>

    <script>
        $(document).on("click", "#addcrt" , function(){
            
        var qty = $('#quantity').val();
        var pid = $("#product_id").val();
        if($("input[name='color']").length){
            colors = $("input[name='color']:checked").data('color');
        }
    
        if($('.product-attr').length > 0)
        {
        values = $(".product-attr:selected").map(function() {
        return $(this).val();
        }).get();

        keys = $(".product-attr:selected").map(function() {
        return $(this).data('key');
        }).get();

        prices = $(".product-attr:selected").map(function() {
        return $(this).data('price');
        }).get();



        }
        
        $.ajax({
            type: "GET",
            url:mainurl+"/addnumcart",
            data:{id:pid,qty:qty,size:sizes,color:colors,size_qty:size_qty,size_price:size_price,size_key:size_key,keys:keys,values:values,prices:prices},
            success:function(data){
                $(".cart-count").html(data[0]);
                $(".cart-items").load(mainurl+'/carts/view');
                toastr.success('با موفقیت به سبد خرید اضافه شد');          
            }
            });

        });


    </script>
@endsection