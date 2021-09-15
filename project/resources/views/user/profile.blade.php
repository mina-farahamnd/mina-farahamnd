@extends('layouts.front')

@section('content')

    <section class="register">
        <div class="container-fluid">

            <div class="row mb-3 register__title">
                <div class="col-md-12 px-0 d-flex justify-content-between">
                    <h6 class="text__black text__iranyekan--regular">ویرایش حساب کاربری</h6>
                    <h6 class="text__green text__iranyekan--regular">Edit My Profile</h6>
                </div>
            </div>

            <form id="userform" action="{{route('user-profile-update')}}" method="POST"
                  enctype="multipart/form-data">
                {{ csrf_field() }}

                @include('includes.admin.form-both')

                <div class="row">
                    <div class="col-12 col-md-6 pr-md-0 pl-md-4 px-0">                        
                        <div class="form-group">
                            <div class="input-group d-flex align-items-center py-2 register__group">
                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black w-25 pl-5 register__lable register__profile text__iranyekan--regular">نام</span>
                                </div>
                                <div class="register__vl">

                                </div>
                                <input type="text" class="form-control text__medium register__input"
                                       name="name"
                                       required=""
                                       value="{{ $user->name }}">

                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black w-25 register__lable">
                                        <img src="{{ asset('assets/front/icon/pen.svg') }}" alt="" class="register__edit--img">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group register__reset--margin">
                            <div class="input-group d-flex align-items-center py-2 mt-n3 border__bottom border-top-0 register__group register__reset--border">
                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black w-25 pl-4 register__lable register__profile text__iranyekan--regular">ایمیل</span>
                                </div>
                                <div class="register__vl">

                                </div>
                                <input type="email" class="form-control text__medium register__input"
                                       name="email"
                                       required=""
                                       value="{{ $user->email }}" disabled>
                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black w-25 register__lable">
                                        <img src="{{ asset('assets/front/icon/pen.svg') }}" alt="" class="register__edit--img">
                                    </span>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 pl-md-0 pr-md-4 px-0">
                        <div class="form-group">
                            <div class="input-group d-flex align-items-center py-2 register__group">
                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black w-25 pl-4 ml-1 register__lable text__iranyekan--regular">نام خانوادگی</span>
                                </div>
                                <div class="register__vl">

                                </div>
                                <input type="text" class="form-control text__medium register__input"
                                       name="lastname"
                                       required=""
                                       value="{{ $user->lastname }}">
                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black w-25 register__lable">
                                        <img src="{{ asset('assets/front/icon/pen.svg') }}" alt="" class="register__edit--img">
                                    </span>
                                </div>                           
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group d-flex align-items-center py-2 mt-n3 border-top-0 border__bottom register__group">
                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black w-25 pl-4 register__lable text__iranyekan--regular">شماره موبایل</span>
                                </div>
                                <div class="register__vl">

                                </div>
                                <input type="text" class="form-control text__medium register__input"
                                       disabled
                                       value="{{ $user->phone }}">
                                <div class="input-group-append">
                                    <span class="input-group-text text__medium text__black w-25 register__lable">
                                        <img src="{{ asset('assets/front/icon/pen.svg') }}" alt="" class="register__edit--img">
                                    </span>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>


            <div class="row">
                <div class="col-md-12 px-0 text-left interest__button">
                    <button type="submit" class="btn mb-0 border-0 p-3 btn__black">
                        <span class="ml-2 text__small text__iranyekan--bold">ثبت و ذخیره اطلاعات</span>
                    </button>
                </div>
            </div>
            </form>
        </div>
    </section>
@endsection

