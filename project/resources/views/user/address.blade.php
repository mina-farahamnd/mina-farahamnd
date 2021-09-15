@extends('layouts.front')

@section('css')
    <link href="{{asset('assets/front/css/leaflet.css')}}" rel="stylesheet" type="text/css">
@endsection


@section('content')
    <section class="user">
        <div class="container-fluid">
            <div class="row mb-3">
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
                                    <button class="btn mb-0" type="button" data-toggle="collapse"
                                            data-target="#address-select" aria-expanded="false">
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
                                    <button class="btn mb-0" type="button" data-toggle="modal"
                                            data-target="#address-new" aria-expanded="false">
                                        <img src="{{ asset('assets/front/icon/plus-white.svg') }}" alt=""
                                             class="arrow-down-white">
                                    </button>
                                </div>
                            </div>
                        </div>


                        {{--map and modal new address --}}

                        <div class="modal fade map__modal" style="z-index: 2000; background-color: transparent;" id="address-new" tabindex="-1" role="dialog" aria-labelledby="address-new" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content px-5" style="border-radius: 2rem; border:1px solid #c8c8c8">
                                    <div class="modal-header d-flex justify-content-between">
                                        <h5 class="modal-title" id="address-new">ثبت آدرس </h5>
                                        <button type="button" class="close ml-0 mr-auto" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
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
                                                                              id="city"  >شهر</span>
                                                        </div>
                                                        <input type="text"
                                                               class="form-control border-left-0 rounded-0 address__input"
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
                                                                >عنوان ادرس</span>
                                                        </div>
                                                        <input type="text"
                                                               class="form-control border-left-0 border-top-0 rounded-0 address__input"
                                                               aria-describedby="
                                                            address_title" name="address_title" placeholder="محل کار">
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

                                                <button type="button" id="save-full-address" class="btn my-4 btn__green text__small d-block address__map--btn">تایید</button>
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

            </div>
        </div>
    </section>


@endsection


@section('js')
    <script src="{{asset('assets/front/js/leaflet.js')}}" type="text/javascript"></script>



    <script type="text/javascript">

        $(document).ready(function (){

            function is_empty_field(field,msg) {
                if(!$(field).val()){
                    $(field).css('border-bottom','1px solid red').attr('placeholder' , msg +  " را وارد نمایید");
                    return false;
                }
                else{
                    $(field).css('border-bottom','1px solid green');
                    return true;
                }
            }

            function is_integer_field(field,msg) {
                if(!$.isNumeric($(field).val())){
                    $(field).css('border-bottom','1px solid red').val("").attr({'placeholder' :  msg +  " فقط شامل عدد می باشد"});
                    return false;
                }else{
                    $(field).css('border-bottom','1px solid green');
                    return true;
                }
            }

            // map
            /*myMap = new L.Map('map', {
                key: 'web.WvEcVXRnWYaMKbLFRXu528H7IjLJu6S6tUYWsbvL',
                maptype: 'dreamy',
                poi: true,
                traffic: false,
                center: [35.699739, 51.338097],
                zoom: 15,
            });

            var greenIcon = L.icon({
                iconUrl: '{{asset('assets/front/images/marker-icon.png')}}',


                iconSize:     [38, 95], // size of the icon
                shadowSize:   [50, 64], // size of the shadow
                iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
                shadowAnchor: [4, 62],  // the same for the shadow
                popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
            });
            var marker = L.marker([35.699739, 51.338097], {icon: greenIcon}).addTo(myMap);




            myMap.on('move', function () {
                marker.setLatLng(myMap.getCenter());

            });

            $("#user-address").hide();
            $('#get-full-address').click(function (){

                var coordinate = myMap.getCenter();
                $.ajax({
                    url: "{{route('get.address.with.coordinate')}}",
                    type: "post",
                    async: false,
                    data: {_token : "{{csrf_token()}}" , lat : coordinate.lat , lng : coordinate.lng} ,
                    success: function (response) {
                        $("#map-modal").fadeOut(550);
                        $("#user-address").delay(600).fadeIn();

                        var location = JSON.parse(response);
                        $('input[name="address"]').val(location.formatted_address);
                        $('input[name="city"]').val(location.city);
                        $('input[name="state"]').val(location.state);
                        $('input[name="lat"]').val(coordinate.lat);
                        $('input[name="lng"]').val(coordinate.lng);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });




            });*/

            $('#save-full-address').click(function (){
                var result;
                result = is_empty_field('input[name="address"]','آدرس');
                result *= is_empty_field('input[name="post_code"]','کد پستی');
                result *= is_empty_field('input[name="phone"]','تلفن');
                result *= is_empty_field('input[name="city"]','شهر');
                result *= is_empty_field('input[name="state"]','استان');
                result *= is_integer_field('input[name="phone"]','تلفن');
                result *= is_integer_field('input[name="post_code"]','کد پستی');
                result *= is_empty_field('input[name="address_title"]','عنوان آدرس');

                if (result){
                    var address = $('input[name="address"]').val();
                    var address_title = $('input[name="address_title"]').val();
                    var city = $('input[name="city"]').val();
                    var state = $('input[name="state"]').val();
                    var post_code = $('input[name="post_code"]').val();
                    var phone = $('input[name="phone"]').val();
                    var lat = $('input[name="lat"]').val();
                    var lng = $('input[name="lng"]').val();
                    $.ajax({
                        url: "{{route('user-address-submit')}}",
                        type: "post",
                        async: false,
                        data: {
                            _token : "{{csrf_token()}}" ,
                            address : address ,
                            city : city ,
                            province : state ,
                            post_code : post_code ,
                            phone : phone ,
                            lat : lat ,
                            lng : lng ,
                            title : address_title
                        } ,
                        success: function (response) {
                            $('#address-new').modal('toggle');
                            $('#user-addresses').load("{{route('load-address')}}");
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });


                }




            });

            $('#search-address-submit').click(function (){
                $('#result').html('');
                var search = $('#search-address').val();
                $.ajax({
                    url: "{{route('get.suggest.address')}}",
                    type: "post",
                    async: false,
                    data: {_token : "{{csrf_token()}}" , search : search} ,
                    success: function (response) {
                        $('#result').html(response);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            });

            /*$('#result').on('click','.suggest-address',function (){
                var x = $(this).data('coordinate-x');
                var y = $(this).data('coordinate-y');
                myMap.panTo(new L.LatLng(y,x));
                $('#result').html('');
            });*/
        });


    </script>
@endsection
