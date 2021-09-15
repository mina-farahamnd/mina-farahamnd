@extends('layouts.front')

@section('content')

    <section class="title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                    <div class="d-flex w-100 py-2 px-4 title__green">
                        <a href="" class="text-decoration-none">
                            <span class="text-white text__medium text__iranyekan--bold">ثبت نام</span>
                        </a>
                        <span class="px-2 text-white text__medium text__iranyekan--bold">/</span>
                        <a href="" class="text-decoration-none">
                            <span class="text-white text__medium text__iranyekan--bold">ورود به حساب کاربری</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="verify-phone" tabindex="-1" role="dialog"  aria-hidden="true"  data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text__iranyekan--bold" >کد تایید که از طریق پیامک برای‌تان ارسال کردیم را در کادر زیر وارد کنید</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body w-50">
                    <div class="w-100">
                        <input type="text" class="form-control" placeholder="کد تایید" name="verify-code">
                    </div>
                    <span id="time"></span>
                    <span class="text__iranyekan--regular">ثانیه</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mb-0 text__iranyekan--bold" id="check-verify-code">تایید</button>
                </div>
            </div>
        </div>
    </div>

    <section class="register">
        <div class="container-fluid">
            
            <div class="row mt-4">
                <div class="col-12 px-0">
                    <h6 class="text__green text__iranyekan--regular">اگر قبلا ثبت نام کرده اید، وارد<a href="" class="text-decoration-none mx-2 text__green d-inline-block text__iranyekan--bold">حساب کاربری</a>خود شوید.</h6>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 col-lg-9 px-0">
                    <span class=" text-justify text__black text__small text__iranyekan--regular">با عضویت در فروشگاه اینترنتی آکام پارس تجربه خرید اینترنتی آسان و با اطمینان داشته باشید.وضعیت سفارش خود را پیگیری نموده و سوابق خریدتان را مشاهده کنید.</span>
                </div>
                <div class="col-12 col-lg-3 px-0 d-none d-lg-flex justify-content-end">
                    <span class="text__black text__small text__iranyekan--bold">برای تکمیل فرآیند خرید ثبت نام کنید</span>
                </div>
            </div>

            <div class="row mb-3 register__title">
                <div class="col-md-12 px-0 d-flex justify-content-between">
                    <h6 class="text__black text__iranyekan--bold">ایجاد حساب کاربری</h6>
                    <h6 class="font-weight-bold text__green">Create Profile</h6>
                </div>
            </div>

            <div class="login-form signup-form mt-3">
                @include('includes.admin.form-login')
            </div>

            <form class="mregisterform" action="{{route('user-register-submit')}}" method="POST">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-12 col-md-6 pr-md-0 px-0">
                        <div class="form-group mb-0">
                            <div class="input-group d-flex align-items-center py-2 register__group register__group--name">
                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black pl-5 register__lable text__iranyekan--regular">نام</span>
                                </div>
                                <div class="register__vl">

                                </div>
                                <input type="text" class="form-control text__medium register__input" name="name">
                            </div>
                        </div>                        
                    </div>
                    <div class="col-12 col-md-6 pl-md-0 px-0">
                        <div class="form-group">
                            <div class="input-group d-flex align-items-center py-2 register__group register__group--lastname">
                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black pl-4 ml-1 register__lable text__iranyekan--regular"  >نام خانوادگی</span>
                                </div>
                                <div class="register__vl">

                                </div>
                                <input type="text" class="form-control text__medium register__input" name="lastname">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 pr-md-0 px-0">
                        <div class="form-group">
                            <div class="input-group d-flex align-items-center py-2 mt-n3 register__group register__group--email">
                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black pl-4 register__lable text__iranyekan--regular" >ایمیل</span>
                                </div>
                                <div class="register__vl">

                                </div>
                                <input type="email" class="form-control text__medium register__input" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pl-md-0 px-0">
                        <div class="form-group">
                            <div class="input-group d-flex align-items-center py-2 mt-n3 register__group register__group--mobile">
                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black pl-4 register__lable text__iranyekan--regular">شماره موبایل</span>
                                </div>
                                <div class="register__vl">

                                </div>
                                <input type="number" class="form-control text__medium register__input" name="phone">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 mt-md-n3 pr-md-0 px-0 d-flex align-items-center w-100">
                        <div class="input-group register__password--group register__password--group--first">
                            <div class="input-group-append register__password--lable--responsive">
                                <span class="input-group-text d-flex align-items-center font-weight-bold text__large text__black w-25 pl-5 register__password--lable text__iranyekan--bold">رمز</span>
                            </div>
                            <input type="password" class="form-control register__password--input password-input" name="password">
                        </div>
                        <div class="d-inline-block px-3 mr-1 register__password--eye">
                            <!-- <img src="icon/eye.svg" alt="" class="password-icon"> -->
                            <img src="{{asset('assets/front/icon/not-eye.svg') }}" alt="" class="password-icon" >
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-md-n3 mt-3 pl-md-0 px-0 d-flex align-items-center w-100">
                        <div class="input-group register__password--group register__password--group--second">
                            <div class="input-group-append ">
                                <span class="input-group-text d-flex align-items-center font-weight-bold text__large text__black w-25 pl-5 register__password--lable text__iranyekan--bold">تایید رمز</span>
                            </div>
                            <input type="password" class="form-control register__password--input password-input" name="password_confirmation">
                        </div>
                        <div class="d-inline-block px-3 mr-1 register__password--eye">
                            <!-- <img src="icon/eye.svg" alt="" class="password-icon"> -->
                            <img src="{{asset('assets/front/icon/not-eye.svg') }}" alt="" class="password-icon">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 px-0 text-left interest__button">
                        <button type="submit" class="btn mb-0 p-3 border-0 btn__black btn__link">
                            <span class="ml-2 text__small text__iranyekan--bold">ثبت نام</span>
                        </button>
                    </div>
                </div>
            </form>

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

            $('#verify-phone').on('show.bs.modal', function (e) {
                $(this).find('input').each(function (){
                    $(this).val('').removeClass('border-danger').attr("placeholder",'');
                });
            })
        });
    </script>

@endsection