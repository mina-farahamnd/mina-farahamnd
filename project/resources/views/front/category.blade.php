@extends('layouts.front')

@section('content')

    <section class="product-mobile">
        <div class="container-fluid">
            <div class="row mb-3" >

                @include('includes.catalog')

                <div class="col-12 col-md-9 pl-1 pr-2" id="ajaxContent">
                    @include('includes.product.filtered-products')
                </div>

            </div>
        </div>
    </section>


<!--

    <section class="search">
        <?php $prod = $hot_products->first();?>
        @isset($prod)
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-md-12 px-0 d-flex justify-content-between">
                        <h6 class="font-weight-bold option__text&#45;&#45;fa">جستجوی آکام پارس</h6>
                        <h6 class="font-weight-bold option__text&#45;&#45;en">AkamPars Search</h6>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 px-0 mt-3">
                        <div class="card border-0">
                            <div class="search__img mt-3">
                                <img src="{{ $prod->photo ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}" alt="" class="card-img w-100">
                            </div>
                            <div class="search__overlay">
                                <div class="search__overlay&#45;&#45;up">
                                    <div class="d-flex justify-content-between">
                                        <div class="search__icon">
                                            <img src="{{ asset('assets/front/icon/search.svg') }}" alt="">
                                        </div>
                                        <div class="text-left search__information">
                                            <img src="{{ asset('assets/front/icon/posted-logo.svg') }}" alt="">
                                            <span class="d-block text__medium">جدیدترین ها، پرفروش ترین ها</span>
                                            <span class="d-block text__medium">پربیننده ترین های آکام پارس</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="search__overlay&#45;&#45;down">
                                    <div class="search__introduction">
                                        <h5 class="font-weight-bold">
                                            <a href="{{ route('front.product', $prod->slug) }}" class="text-decoration-none text__iranyekan&#45;&#45;bold&#45;&#45;ennum text__black">{{$prod->showName()}}</a>
                                        </h5>
                                        <span class="d-block text__medium">{{$prod->category->name}}</span>
                                        @if($prod->tags)
                                            <span class="text__medium">{{implode(' , ',$prod->tags)}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-between py-2 px-3 search__price">
                                        <span class="pr-1 text__medium">قیمت کالا: </span>
                                        <span class="text__medium mr-2 text__number">{{number_format($prod->price)}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endisset
    </section>
-->

@endsection




@section('js')
    <script>


        $(document).ready(function() {

            function getUrlVars()
            {
                var vars = {}, hash;
                var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1);
                if (window.location.href.indexOf('?') != -1 && hashes){
                    hashes = hashes.split('&');
                    for(var i = 0; i < hashes.length; i++)
                    {
                        hash = hashes[i].split('=');
                        vars[decodeURIComponent(hash[0])] = decodeURIComponent(hash[1]);

                    }
                    return vars;
                }
                return vars;
            }

            function implode(getRequestParam){
                var blkstr = [];
                $.each(getRequestParam, function(idx2,val2) {
                    var str = idx2 + "=" + val2;
                    blkstr.push(str);
                });
                return blkstr.join("&");
            }


            function updateGetRequest(el){

                var getRequestParam = getUrlVars();
                var attributeName = $(el).attr('name');
                var attributeValue = $(el).val();

                if (!$(el).is(":checked") && getRequestParam[attributeName] == attributeValue){
                    delete getRequestParam[attributeName];
                    // var newGetRequest = implode(getRequestParam);
                    // window.history.replaceState('', '', '?' + newGetRequest);
                }
                delete getRequestParam['page'];
                var newGetRequest = implode(getRequestParam);
                window.history.replaceState('', '', '?' + newGetRequest);
            }

            $(".attribute-input").change(function () {
                filterSelect(this);
                updateGetRequest(this);
                updateGetRequest(this);
            });

            $(".attribute-input").each(function() {
                filterSelect(this);
            });

            $('#filterresult').on('click','.delete-filter',function () {
                $(this).parent().parent().remove();
                var checkboxId = $(this).parent().parent().data('remove-id');
                $('#' + checkboxId).prop('checked' , false);
                updateGetRequest('#' + checkboxId);
                filter();
            });

            function filterSelect(el) {
                if ($(el).is(':checked')) {

                    $("#filterresult").append(


                        // "<div class='card filters__btn h-25 m-2 remove-filter' data-remove-id="+"'"+$(el).attr('id')+"'"+">\n" +
                        // "<button class='btn mb-0 d-flex align-items-center'>\n" +
                        // "<span class='mb-0 text__medium text__black filters__btn__text'>"+$(el).val()+"</span>\n" +
                        //     "<span class='delete-filter'>delete</span>\n"+
                        // "</button>"+
                        // "</div>"

                        "<div class='card filters__btn h-25 m-2 remove-filter' data-remove-id="+"'"+$(el).attr('id')+"'"+">\n" +
                        "<button class='btn mb-0 py-0 px-2 d-flex align-items-center filters__btn--close'>\n" +
                        "<span class='mb-0 text__medium text__black'>"+$(el).val()+"</span>\n" +
                            "<i class='ion-android-close mt-1 mx-3 text__large delete-filter'></i>\n"+

                        "</button>"+
                        "</div>"

                    );

                }else {
                    var elRemoveId = $(el).attr('id');
                    $('div[data-remove-id=' + '"'+elRemoveId+'"'+']').remove();

                }



            }




            //filter();

            $('#stock').change(function() {
                $("#ajaxLoader").show();
                filter();
            });



            // when dynamic attribute changes
            $(".attribute-input, #sortby").on('change', function() {
                $("#ajaxLoader").show();
                filter();
            });

            // when price changed & clicked in search button
            $(".filter-btn").on('click', function(e) {
                e.preventDefault();
                $("#ajaxLoader").show();
                filter();
            });



        });



        function filter() {
            let filterlink = '';


            if($('#stock').is(':checked')) {
                if (filterlink == '') {
                    filterlink += '{{route('front.category', [Request::route('category'), Request::route('subcategory'), Request::route('childcategory')])}}' + '?'+$("#stock").attr('name')+'='+$("#stock").val();
                } else {
                    filterlink += '&'+$("#stock").attr('name')+'='+$("#stock").val();
                }
            }

            $(".attribute-input").each(function() {
                if ($(this).is(':checked')) {
                    if (filterlink == '') {
                        filterlink += '{{route('front.category', [Request::route('category'), Request::route('subcategory'), Request::route('childcategory')])}}' + '?'+$(this).attr('name')+'='+$(this).val();
                    } else {
                        filterlink += '&'+$(this).attr('name')+'='+$(this).val();
                    }



                }else {

                }
            });


            //console.log(encodeURI(filterlink));
            $("#ajaxContent").load(encodeURI(filterlink), function(data) {
                // add query string to pagination
                addToPagination();
                $("#ajaxLoader").fadeOut(1000);
            });
        }



        $('.filters__search--input').keyup(function(){
            var valThis = $(this).val().toLowerCase();
            $(this).parent().parent().find('.attribute-input').each(function(){
                var text = $("label[for='"+$(this).attr('id')+"']").text().toLowerCase();
                (text.indexOf(valThis) == 0) ? $(this).parent().show() : $(this).parent().hide();
            });
        });
        addToPagination();

        // append parameters to pagination links
        function addToPagination() {
            // add to attributes in pagination links
            $('ul.pagination li a').each(function() {
                let url = $(this).attr('href');
                let queryString = '?' + url.split('?')[1]; // "?page=1234...."

                let urlParams = new URLSearchParams(queryString);
                let page = urlParams.get('page'); // value of 'page' parameter

                let fullUrl = '{{route('front.category', [Request::route('category'),Request::route('subcategory'),Request::route('childcategory')])}}?page='+page;

                $(".attribute-input").each(function() {
                    if ($(this).is(':checked')) {
                        fullUrl += '&'+encodeURI($(this).attr('name'))+'='+encodeURI($(this).val());
                    }
                });


                $(this).attr('href', fullUrl);
            });
        }

        $(document).on('click', '.categori-item-area .pagination li a', function (event) {
            event.preventDefault();
            if ($(this).attr('href') != '#' && $(this).attr('href')) {
                $('#preloader').show();
                $('#ajaxContent').load($(this).attr('href'), function (response, status, xhr) {
                    if (status == "success") {
                        $('#preloader').fadeOut();
                        $("html,body").animate({
                            scrollTop: 0
                        }, 1);

                        addToPagination();
                    }
                });
            }
        });

    </script>




@endsection