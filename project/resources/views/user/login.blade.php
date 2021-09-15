@extends('layouts.front')

@section('content')

<section class="user">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 px-0 pr-md-0 user__profile">
                <div class="d-flex justify-content-between">
                    <h6 class="text__gray text__iranyekan--regular">ورود به حساب کاربری</h6>
                    <h6 class="font-weight-bold text__green">My Profile</h6>
                </div>
                <div class="mt-4">
                    <span class="text__black text__small text__iranyekan--light">لطفا برای تکمیل فرآیند خرید خود وارد شوید</span>
                </div>
                <div class="login-form signin-form mt-3">
                    @include('includes.admin.form-login')
                </div>

                <form class="mloginform" action="{{ route('user.login.submit') }}" method="POST">

                    {{csrf_field()}}

                    <div class="d-flex mt-4">
                        <div class="input-group register__password--group user__width">
                            <div class="input-group-append user__append">
                                <span class="input-group-text d-flex align-items-center pl-5 text__gray text__medium register__password--lable text__iranyekan--bold">موبایل</span>
                            </div>
                            <div class="register__vl my-1"></div>
                            <input type="text" class="form-control register__password--input" name="phone">
                        </div>
                        {{-- <div class="d-inline-block px-3 mr-1 register__password--eye">
                            <img src="{{asset('assets/front/icon/eye.svg') }}" alt="" class="password-icon">
                            <img src="{{asset('assets/front/icon/not-eye.svg') }}" alt="" class="password-icon" >
                        </div> --}}
                    </div>

                    <div class="d-flex mt-4">
                        <div class="input-group register__password--group user__width">
                            <div class="input-group-append user__append pl-4">
                                <span class="input-group-text d-flex align-items-center text__gray text__medium register__password--lable register__password--login text__iranyekan--bold">رمز عبور</span>
                            </div>
                            <div class="register__vl my-1"></div>
                            <input type="password" class="form-control register__password--input password-input" name="password">
                        </div>
                        <div class="d-inline-block px-3 mr-1 register__password--eye">
                            {{-- <img src="{{asset('assets/front/icon/eye.svg') }}" alt="" class="password-icon"> --}}
                            <img src="{{asset('assets/front/icon/not-eye.svg') }}" alt="" class="password-icon" >
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <div>
                            <span class="text__gray text__small text__iranyekan--regular cursor-pointer" data-toggle="modal" data-target="#reset-password-modal">رمز عبور را فراموش کرده ام</span>
                        </div>
                        <div>
                            <button type="submit" class="btn mb-0 border-0 p-3 btn__black">
                                <span class="ml-2 text__small text__iranyekan--bold">ورود به حساب کاربری</span>
                            </button>
                        </div>
                    </div>
                </form>


            </div>
            
            <div class="col-12 col-md-6 mt-5 mt-md-0 user__register">
                <div class="user__register--creat">
                    <div class="d-flex justify-content-between align-items-center py-4 pl-4 pr-3">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('assets/front/icon/plus-green-large.svg') }}" alt="" class="user__register--img">
                            <h6 class="text__gray mr-3 text__iranyekan--regular">ثبت نام و ایجاد حساب کاربری</h6>                            
                        </div>
                        <div>
                            <h6 class="font-weight-bold text__green d-none d-sm-flex d-md-none d-xl-flex">Create My Profile</h6>
                        </div>
                    </div>

                    <div class="mt-4 pl-4 user__register--text">
                        <span class="text__black text__small text-justify text__iranyekan--regular">با عضویت در فروشگاه اینترنتی آکام پارس تجربه خرید اینترنتی آسان و با اطمینان داشته باشید. وضعیت سفارش خود را پیگیری نموده و سوابق خریدتان را مشاهده کنید.</p>
                        <div class="d-flex justify-content-between align-items-center mt-5 mb-4">
                            <div>
                                <span class="text__gray text__small text__iranyekan--regular">راهنمای خرید از آکام پارس</span>
                            </div>
                            <div>
                                <a href="{{route('user-register')}}" class="btn mb-0 border-0 p-3 btn__black btn__link">
                                    <span class="ml-2 text__small text__iranyekan--regular">ثبت نام</span>
                                </a>
                            </div>
                        </div>
                    </div> 
                </div>                       
            </div>


            <!-- Modal -->
            <div class="modal fade" id="verify-phone" tabindex="-1" role="dialog"  aria-hidden="true"  data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">کد تایید که از طریق پیامک برای‌تان ارسال کردیم را در کادر زیر وارد کنید</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body w-50">
                            <div class="w-50">
                                <input type="text" class="form-control" placeholder="کد تایید" name="verify-code">
                            </div>
                            <span id="time"></span>
                            <span>ثانیه</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary mb-0" id="check-verify-code">تایید</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="reset-password-modal" tabindex="-1" role="dialog"  aria-hidden="true" data-backdrop="static"  data-keyboard="false">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title forget-text" >فراموشی رمز عبور</h5>
                            <h5 class="modal-title verify-text" style="display: none">کد تایید که از طریق پیامک برای‌تان ارسال کردیم را در کادر زیر وارد کنید</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body w-50">
                            <form>
                                <div id="send-verify-code">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">موبایل:</label>
                                        <input type="text" class="form-control" name="reset_phone">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" id="send-verify-code-button">تایید</button>
                                    </div>
                                </div>

                                <div id="check-verify-code-reset" class="d-none">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">کد تایید:</label>
                                        <input type="text" class="form-control" name="reset_code">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">رمز عبور:</label>
                                        <input type="password" class="form-control" name="reset_password">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">تکرار رمز عبور:</label>
                                        <input type="password" class="form-control" name="reset_password_confirmation">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary" id="check-verify-code-button">تایید</button>
                                    </div>
                                </div>


                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection


@section('js')
    <script>
        $(document).ready(function (){
            $('#check-verify-code').click(function (){

                var verify_code = $('input[name="verify-code"]').val();
                $.ajax({
                    url: "{{route('check.verify.code')}}",
                    type: "post",
                    async: false,
                    data: {_token : "{{csrf_token()}}" , verify_code : verify_code } ,
                    success: function (response) {

                        if (response.status == "1"){
                            window.location = mainurl + "/user/dashboard";
                        }else if(response.status == "-1"){
                            $('input[name="verify-code"]').val("").addClass('border border-danger').attr("placeholder", response.msg);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });

            });
            $('#reset-password-modal').on('show.bs.modal', function (e) {
                $(this).find('input').each(function (){
                    $(this).val('').removeClass('border-danger').attr("placeholder",'');
                    $("#send-verify-code").removeClass('d-none border-danger').attr("placeholder",'');
                    $("#check-verify-code-reset").addClass('d-none');
                });
                $('.forget-text').show();
                $('.verify-text').hide();
            });

            $('#send-verify-code-button').click(function (){

                var phone = $('input[name="reset_phone"]').val();
                $.ajax({
                    url: "{{route('send-verify-code')}}",
                    type: "post",
                    async: false,
                    data: {_token : "{{csrf_token()}}" , phone : phone } ,
                    success: function (data) {
                        if (data.status == "1"){
                            $('.forget-text').hide();
                            $('.verify-text').show();
                            $("#send-verify-code").addClass('d-none');
                            $("#check-verify-code-reset").removeClass('d-none');
                        }else if(data.status == "-1"){
                            $('input[name="reset_phone"]').val("").addClass('border border-danger').attr("placeholder", data.msg);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });

            });

            $('#check-verify-code-button').click(function (){

                var reset_code = $('input[name="reset_code"]').val();
                var reset_password = $('input[name="reset_password"]').val();
                var reset_password_confirmation = $('input[name="reset_password_confirmation"]').val();
                $.ajax({
                    url: "{{route('reset-password')}}",
                    type: "post",
                    async: false,
                    data: {_token : "{{csrf_token()}}" , reset_code : reset_code ,reset_password:reset_password,reset_password_confirmation:reset_password_confirmation} ,
                    success: function (data) {
                        if (data.status == "1"){
                            location.reload();
                        }else if(data.status == "-1"){
                            $('input[name="reset_code"]').val("").addClass('border border-danger').attr("placeholder", data.msg);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });

            });
        });
    </script>

@endsection