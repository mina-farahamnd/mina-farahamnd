@extends('layouts.front')

@section('content')

<section class="register">
    <div class="container-fluid">

        <div class="row mb-3 register__title">
            <div class="col-md-12 px-0 d-flex justify-content-between">
                <h6 class="text__black text__iranyekan--regular">تغییر رمز عبور</h6>
                <h6 class="text__green text__iranyekan--regular">Edit Password</h6>
            </div>
        </div>

        <form id="userform" action="{{route('user-reset-submit')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('includes.admin.form-both')
            <div class="row">
                <div class="col-12 col-md-6 pr-md-0 pl-md-4 px-0">                        
                    <div class="form-group register__reset--margin">
                        <div class="input-group d-flex align-items-center py-2 register__group register__reset--border">
                            <div class="input-group-append">
                                <span class="input-group-text text__medium text__black w-25 pl-5 register__lable register__reset text__iranyekan--regular">رمز عبور فعلی</span>
                            </div>
                            <div class="register__vl">

                            </div>
                            <input type="password" name="cpass"
                                   class="form-control text__medium register__input password-input-reset"
                                   value="" required="">

                            <div class="input-group-append">                            
                                <div class="d-inline-block px-3 mr-1 bg-white register__password--eye">
                                    <!-- <img src="icon/eye-green.svg" alt="" class="password-icon"> -->
                                    <img src="{{ asset('assets/front/icon/not-eye-green.svg') }}" alt="" class="password-icon-reset" >
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 col-md-6 pl-md-0 pr-md-4 px-0">
                    <div class="form-group">
                        <div class="input-group d-flex align-items-center py-2 register__group">
                            <div class="input-group-append">
                                <span class="input-group-text text__medium text__black w-25 ml-1 register__lable edit__password--padding text__iranyekan--regular">رمز عبور جدید</span>
                            </div>
                            <div class="register__vl">

                            </div>
                            <input type="password" name="newpass"
                                   class="form-control text__medium register__input password-input-reset"
                                   value="" required="">
							<div class="input-group-append">                            
								<div class="d-inline-block px-3 mr-1 bg-white register__password--eye">
									<!-- <img src="icon/eye-green.svg" alt="" class="password-icon"> -->
									<img src="{{ asset('assets/front/icon/not-eye-green.svg') }}" alt="" class="password-icon-reset" >
								</div>
							</div>                          
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group d-flex align-items-center py-2 mt-n3 border-top-0 border__bottom register__group">
                            <div class="input-group-append">
                                <span class="input-group-text text__medium text__black w-25 pl-4 register__lable text__iranyekan--regular">تکرار رمز عبور جدید</span>
                            </div>
                            <div class="register__vl">

                            </div>
                            <input type="password" name="renewpass"
                                   class="form-control text__medium register__input password-input"
                                   value="" required="">
                            <div class="input-group-append">
                                <div class="d-inline-block px-3 mr-1 bg-white register__password--eye">
                                    <!-- <img src="icon/eye-green.svg" alt="" class="password-icon"> -->
                                    <img src="{{ asset('assets/front/icon/not-eye-green.svg') }}" alt="" class="password-icon-reset" >
                                </div>
                            </div>                             
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 px-0 text-left interest__button">
                    <button type="submit" class="btn mb-0 border-0 p-3 btn__black">
                        <span class="ml-2 text__small text__iranyekan--bold">تغییر رمز عبور</span>
                    </button>
                </div>
            </div>

        </form>


    </div>
</section>
@endsection

