
<div class="main container-fluid d-md-none px-5" id="top">
    <div class="row header">
        <div class="col-4 pl-0 mt-3 hahoot-online-store">
            <img src="{{ asset('/assets/front/images/hahoot/hahoot-online-store.svg') }}"
                alt="Hahoot Online Store">
        </div>
        <div class="col-8 pr-0">
            <!-- فروشگاه اینترنتی هاهوت -->
            <div class="text-right mt-4 hahoot-online-store">
                <span>فروشگاه اینترنتی هاهوت</span>
            </div>
            <!-- open -->
            <div class="d-flex flex-row-reverse">
                <div class="mt-2">
                    <a href="#navigation-m" data-toggle="collapse" class="text-decoration-none" aria-expanded="false">
                        <img src="{{ asset('/assets/front/images/hahoot/open-icon.svg') }}"
                            alt="open" id="open">
                    </a>

                    <a href="#navigation-m" data-toggle="collapse" class="text-decoration-none" aria-expanded="false">
                        <img src="{{asset('/assets/front/images/hahoot/close-icon.svg')}}" alt="close" id="close">
                    </a>

                </div>


                <!-- cart-m -->
                <div class=" border border-muted mt-2 mx-3 ">
                    <div
                        class="welcom-to-hahoot-dl-counter-m position-absolute text-center d-flex align-items-center justify-content-center">
                        <span class="text-white cart-count">{{isset(Session::get('cart')->items) ? count(Session::get('cart')->items) : 0}}</span>
                    </div>

                    <a href="#" target="_blank" class="text-decoration-none position-relative">
                        <img src="{{ asset('/assets/front/images/hahoot/cart.svg') }}"
                            alt="Cart" class="cart-m p-1" data-toggle="modal" data-target="#my-cart-hahoot-m">
                    </a>

                </div>


                <!-- person-m-->
                <div class="border border-muted mt-2">
                    <a href="#" target="_blank" class="text-decoration-none">
                        <img src="{{ asset('/assets/front/images/hahoot/person.svg') }}"
                            alt="person" class="person-m p-1">
                    </a>
                </div>


            </div>

        </div>
    </div>
    <!-- navigtion -->
    <div class="row collapse" id="navigation-m">
        <div class="col-12 px-0 w-100">
            <ul class="nav nav-m px-2">
                <!-- کالای دیجیتال menu -->
                <li class="nav-item w-100">
                    <div class="text-right d-flex align-items-center menu-mobile">
                        <a href="#" class="nav-link py-2 px-0 w-100 collapsed text-decoration-none text-dark"
                            data-toggle="collapse" data-target="#submenu1">
                            کالای دیجیتال
                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                alt="flash down" class="flash-down float-left">
                        </a>
                    </div>
                    <div class="collapse" id="submenu1">
                        <ul class="nav px-0">

                            <li class="nav-item w-100">
                                <div class="text-right d-flex align-items-center px-2 submenu-mobile">
                                    <a href="#" class=" nav-link w-100 collapsed text-decoration-none text-white"
                                        data-toggle="collapse" data-target="#submenu1sub1">موبایل
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                                <div class="collapse" id="submenu1sub1">
                                    <ul class="nav text-right text-white px-0 flex-row-reverse">

                                        <li class="nav-item w-100">
                                            <div class="px-0">
                                                <a href="#" class="nav-link px-0 text-decoration-none py-0">
                                                    <div
                                                        class="text-right d-flex align-items-center px-4 submenu-sub-A-mobile">
                                                        <a href="#"
                                                            class=" nav-link w-100 collapsed text-decoration-none text-white"
                                                            data-toggle="collapse" data-target="#submenu1sub1-A">برندها
                                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                                alt="flash down" class="flash-down float-left">
                                                        </a>
                                                    </div>

                                                    <div class="collapse" id="submenu1sub1-A">
                                                        <ul class="nav text-right text-white p-0 flex-row-reverse">
                                                            <li class="nav-item w-100">
                                                                <div class="d-flex justify-content-center">
                                                                    <table
                                                                        class="table table table-bordered text-right submenu-sub-B-mobile">
                                                                        <tbody class="">
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">Apple</a>
                                                                                </td>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">Sony</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">Samsung</a>
                                                                                </td>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">Microsoft</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">LG</a>
                                                                                </td>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">Nokia</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">HTC</a>
                                                                                </td>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">Asus</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">Huawei</a>
                                                                                </td>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">Lenovo</a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </a>
                                            </div>
                                        </li>

                                        <hr class="bg-white font-weight-bold w-100 my-0 ">

                                        <li class="nav-item w-100">
                                            <div class="px-0">
                                                <a href="#" class="nav-link px-0 text-decoration-none py-0">
                                                    <div
                                                        class="text-right d-flex align-items-center px-4 submenu-sub-A-mobile">
                                                        <a href="#"
                                                            class=" nav-link w-100 collapsed text-decoration-none text-white"
                                                            data-toggle="collapse" data-target="#submenu1sub2-B">انواع
                                                            گوشی
                                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                                alt="flash down" class="flash-down float-left">
                                                        </a>
                                                    </div>

                                                    <div class="collapse" id="submenu1sub2-B">
                                                        <ul class="nav text-right text-white p-0 flex-row-reverse">
                                                            <li class="nav-item w-100">
                                                                <div class="d-flex justify-content-center">
                                                                    <table
                                                                        class="table table table-bordered text-right submenu-sub-B-mobile">
                                                                        <tbody class="">
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">دو
                                                                                        سیم کارت</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">تک
                                                                                        سیم کارت</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">گوشی
                                                                                        های 4G</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">گوشی
                                                                                        های کلاسیک</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">فیلت</a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>


                                        </li>
                                        <hr class="bg-white font-weight-bold w-100 my-0 ">
                                        <li class="nav-item w-100">
                                            <div class="px-0">
                                                <a href="#" class="nav-link px-0 text-decoration-none py-0">
                                                    <div
                                                        class="text-right d-flex align-items-center px-4 submenu-sub-A-mobile">
                                                        <a href="#"
                                                            class=" nav-link w-100 collapsed text-decoration-none text-white"
                                                            data-toggle="collapse" data-target="#submenu1sub3-c">بر اساس
                                                            سیستم عامل
                                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                                alt="flash down" class="flash-down float-left">
                                                        </a>
                                                    </div>

                                                    <div class="collapse" id="submenu1sub3-c">
                                                        <ul class="nav text-right text-white p-0 flex-row-reverse">
                                                            <li class="nav-item w-100">
                                                                <div class="d-flex justify-content-center">
                                                                    <table
                                                                        class="table table table-bordered text-right submenu-sub-B-mobile">
                                                                        <tbody class="">
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">ios</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">اندروید</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">ویندوز
                                                                                        فون</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">سایر
                                                                                        سیستم عامل ها</a></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <hr class="bg-white font-weight-bold w-100 my-0 ">
                                        <li class="nav-item w-100">
                                            <div class="px-0">
                                                <a href="#" class="nav-link px-0 text-decoration-none py-0">
                                                    <div
                                                        class="text-right d-flex align-items-center px-4 submenu-sub-A-mobile">
                                                        <a href="#"
                                                            class=" nav-link w-100 collapsed text-decoration-none text-white"
                                                            data-toggle="collapse" data-target="#submenu1sub4-D">لوازم
                                                            جانبی
                                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                                alt="flash down" class="flash-down float-left">
                                                        </a>
                                                    </div>

                                                    <div class="collapse" id="submenu1sub4-D">
                                                        <ul class="nav text-right text-white p-0 flex-row-reverse">
                                                            <li class="nav-item w-100">
                                                                <div class="d-flex justify-content-center">
                                                                    <table
                                                                        class="table table table-bordered text-right submenu-sub-B-mobile">
                                                                        <tbody class="">
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">محافظ
                                                                                        صفحه نمایش</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">کیف
                                                                                        و کاور گوشی</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">هندزفری</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">کارت
                                                                                        حافظه MicroSD</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">پاوربانک</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">شارژر</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">باتری
                                                                                        گوشی</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">مونوپاد
                                                                                        و پایه نگهدارنده</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">قلم
                                                                                        لمسی (Stylus)</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">موارد
                                                                                        بیشتر</a></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <hr class="bg-white font-weight-bold w-100 my-0 ">
                                        <li class="nav-item w-100">
                                            <div class="px-0">
                                                <a href="#" class="nav-link px-0 text-decoration-none py-0">
                                                    <div
                                                        class="text-right d-flex align-items-center px-4 submenu-sub-A-mobile">
                                                        <a href="#"
                                                            class=" nav-link w-100 collapsed text-decoration-none text-white"
                                                            data-toggle="collapse" data-target="#submenu1sub5-E">رده
                                                            کاربری
                                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                                alt="flash down" class="flash-down float-left">
                                                        </a>
                                                    </div>

                                                    <div class="collapse" id="submenu1sub5-E">
                                                        <ul class="nav text-right text-white p-0 flex-row-reverse">
                                                            <li class="nav-item w-100">
                                                                <div class="d-flex justify-content-center">
                                                                    <table
                                                                        class="table table table-bordered text-right submenu-sub-B-mobile">
                                                                        <tbody class="">
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">مناسب
                                                                                        بازی</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">مناسب
                                                                                        عکاسی</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">مناسب
                                                                                        عکاسی سلفی</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td><a href="#"
                                                                                        class="text-decoration-none text-white">مقاوم
                                                                                        در برابر آب</a></td>
                                                                            </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>

                                    </ul>

                                </div>
                            </li>

                            <li class="nav-item w-100 mt-2">
                                <div class="text-right d-flex align-items-center px-2 submenu-mobile">
                                    <a href="#" class=" nav-link w-100 collapsed text-decoration-none text-white"
                                        data-toggle="collapse" data-target="#submenu2sub1">تبلت
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item w-100 mt-2">
                                <div class="text-right d-flex align-items-center px-2 submenu-mobile">
                                    <a href="#" class=" nav-link w-100 collapsed text-decoration-none text-white"
                                        data-toggle="collapse" data-target="#submenu3sub1">لپ تاپ
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item w-100 mt-2">
                                <div class="text-right d-flex align-items-center px-2 submenu-mobile">
                                    <a href="#" class=" nav-link w-100 collapsed text-decoration-none text-white"
                                        data-toggle="collapse" data-target="#submenu4sub1">اپل واچ
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item w-100 mt-2">
                                <div class="text-right d-flex align-items-center px-2 submenu-mobile">
                                    <a href="#" class=" nav-link w-100 collapsed text-decoration-none text-white"
                                        data-toggle="collapse" data-target="#submenu5sub1">کامپیوتر و تجهیزات جانبی
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item w-100 mt-2">
                                <div class="text-right d-flex align-items-center px-2 submenu-mobile">
                                    <a href="#" class=" nav-link w-100 collapsed text-decoration-none text-white"
                                        data-toggle="collapse" data-target="#submenu6sub1">ماشین های اداری
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item w-100 mt-2">
                                <div class="text-right d-flex align-items-center px-2 submenu-mobile">
                                    <a href="#" class=" nav-link w-100 collapsed text-decoration-none text-white"
                                        data-toggle="collapse" data-target="#submenu7sub1">اکسسوری های مربوط
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>




                        </ul>
                    </div>
                </li>
                <hr class="line-horizontal-menu font-weight-bold w-100 my-0 ">
                <li class="nav-item flex-column w-100 ">
                    <div class="text-right d-flex align-items-center ">
                        <a href="#" class="nav-link py-2 px-0 w-100 collapsed text-dark" data-toggle="collapse"
                            data-target="">
                            الکترونیک
                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                alt="flash down" class="flash-down float-left">
                        </a>
                    </div>
                </li>
                <hr class="line-horizontal-menu font-weight-bold w-100 px-0 my-0">
                <li class="nav-item flex-column w-100 ">
                    <div class="text-right d-flex align-items-center ">
                        <a href="#" class="nav-link py-2 px-0 w-100 collapsed text-dark" data-toggle="collapse"
                            data-target="">
                            فرهنگ و هنر
                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                alt="flash down" class="flash-down float-left">
                        </a>
                    </div>
                </li>
                <hr class="line-horizontal-menu font-weight-bold w-100 my-0 ">

                <!-- ورزش و سرگرمی -->
                <li class="nav-item flex-column w-100 ">
                    <div class="text-right d-flex align-items-center ">
                        <a href="#" class="nav-link py-2 px-0 w-100 collapsed text-dark" data-toggle="collapse"
                            data-target="">
                            ورزش و سرگرمی
                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                alt="flash down" class="flash-down float-left">
                        </a>
                    </div>
                </li>
                <hr class="line-horizontal-menu font-weight-bold w-100 my-0 ">

                <!-- لوازم خانه-->
                <li class="nav-item flex-column w-100 ">
                    <div class="text-right d-flex align-items-center ">
                        <a href="#" class="nav-link py-2 px-0 w-100 collapsed text-dark" data-toggle="collapse"
                            data-target="">
                            لوازم خانه
                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                alt="flash down" class="flash-down float-left">
                        </a>
                    </div>
                </li>
                <hr class="line-horizontal-menu font-weight-bold w-100 my-0 ">

                <!-- زیبایی و سلامت-->
                <li class="nav-item flex-column w-100 ">
                    <div class="text-right d-flex align-items-center ">
                        <a href="#" class="nav-link py-2 px-0 w-100 collapsed text-dark" data-toggle="collapse"
                            data-target="">
                            زیبایی و سلامت
                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                alt="flash down" class="flash-down float-left">
                        </a>
                    </div>
                </li>
                <hr class="line-horizontal-menu font-weight-bold w-100 my-0 ">

                <!-- ابزار و ملزومات-->
                <li class="nav-item flex-column w-100 ">
                    <div class="text-right d-flex align-items-center ">
                        <a href="#" class="nav-link py-2 px-0 w-100 collapsed text-dark" data-toggle="collapse"
                            data-target="">
                            ابزار و ملزومات
                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                alt="flash down" class="flash-down float-left">
                        </a>
                    </div>
                </li>
                <hr class="line-horizontal-menu font-weight-bold w-100 my-0 ">

                <!-- اسباب بازی-->
                <li class="nav-item flex-column w-100 ">
                    <div class="text-right d-flex align-items-center ">
                        <a href="#" class="nav-link py-2 px-0 w-100 collapsed text-dark" data-toggle="collapse"
                            data-target="#submenu1">
                            اسباب بازی
                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                alt="flash down" class="flash-down float-left">
                        </a>
                    </div>
                </li>

            </ul>
        </div>

    </div>

    <!-- search  -->
    <div class="row">
        <div class="col-12">
            <div class="footer-m-email mx-n4 mt-2">
                <form action="" target="_blank" method="#" class="header-m-search-form d-flex flex-row-reverse form-group d-flex ">

                    <button type="submit" class="btn header-m-btn-search border-0 rounded-0 pr-2">
                        <img src="{{ asset('/assets/front/images/hahoot/search.svg') }}"
                            alt="icon">
                    </button>

                    <input type="search"
                        class="header-m-input-search form-control border-0 rounded-0 shadow-none mt-2 py-0 mx-n2 px-0"
                        placeholder="محصول یا برند مورد علاقه خود را جستجو کنید">


                    <div class="mx-2 d-flex flex-row-reverse align-items-center ">
                        <div class="welcom-to-hahoot-dl-best-seller d-flex align-items-center border-right">
                            <a href="#" class="text-decoration-none text-white mr-1">
                                <span class="mr-4">جدید</span>
                                <input class="welcom-to-hahoot-dl-checking form-check-input " type="radio"
                                name="sort" value="date_desc">
                            </a>
                        </div>
                        <div class="welcom-to-hahoot-dl-new d-flex align-items-center mr-1">
                            <a href="#" class="text-decoration-none text-white mr-2">
                                <span class="mr-4">پرفروش</span>
                                <input class="welcom-to-hahoot-dl-checking form-check-input " type="radio"
                                name="sort" value="bestseller">
                            </a>
                        </div>
                    </div>


                </form>
            </div>

        </div>
    </div>

</div>
<!-- -----------------------------------------header-p1-***for mobile***- end----------------------------------------- -->
<!-- -----------------------------------------header-p1-***for desktop and laptop***- start----------------------------------------- -->

<div class="main container-fluid d-none d-md-block">
    <div class="row mx-md-5 mt-5 d-md-flex px-4 header">
        <!-- hahoot-online-store-dl -->
        <div class="col-3 hahoot-online-store-dl mt-4 px-0">
            <div class="text-left">
                <span>فروشگاه اینترنتی هاهوت</span>
            </div>
            <div class="d-md-flex mt-md-2 mt-xl-3">
                <img src="{{ asset('/assets/front/images/hahoot/open-icon.svg') }}"
                    alt="open-icon" class="mt-md-2 mt-xl-0 hahoot-online-store-dl-open mr-2">
                <a href="{{route('front.index')}}">
                    <img src="{{ asset('/assets/front/images/hahoot/hahoot-online-store.svg') }}"
                    alt="Hahoot Online Store" class="hahoot-online-store-dl-logo">
                </a>

            </div>
            <!-- hahoot-online-store-dl-social-networks -->
            <div class="hahoot-online-store-dl-social-networks px-0">
                <a href="#" class="d-md-flex align-items-center text-decoration-none">
                    <img src="{{ asset('/assets/front/images/hahoot/instagram.svg') }}"
                        alt="icon" class="instagram p-md-1 mr-md-2 mr-xl-4">
                    <img src="{{ asset('/assets/front/images/hahoot/telegeram.svg') }}"
                        alt="icon" class="telegeram p-md-1 mr-md-2 mr-xl-4">
                    <img src="{{ asset('/assets/front/images/hahoot/pinterest.svg') }}"
                        alt="icon" class="pinterest p-md-1 mr-md-2 mr-xl-4">
                    <img src="{{ asset('/assets/front/images/hahoot/facebook.svg') }}"
                        alt="icon" class="facebook p-md-1 mr-md-2 mr-xl-4">
                    <span class=" text-md-right">به ما بپیوندید</span>
                </a>
            </div>
        </div>
        <!-- welcom-to-hahoot-dl -->
        <div class="col-9 mt-md-4  welcom-to-hahoot-dl px-0">
            <div class="row">
                <div class="col-md-12 d-md-flex welcom-to-hahoot-dl-store">
                    <div class="text-primary font-weight-bold">
                        <span>به فروشگاه اینترنتی هاهوت خوش آمدید</span>
                    </div>
                    <div class="welcom-to-hahoot-dl-vl mx-md-1 mx-lg-2"></div>

                    <div class="welcom-to-hahoot-dl-account font-weight-bold">
                        <span>
                            اکنون می توانید وارد <a href="#" target="_blank"
                                class="text-muted text-decoration-none">حساب کاربری</a> خود شوید و یا <a href="#"
                                target="_blank" class="text-muted text-decoration-none">حساب جدید</a> باز نمایید.
                        </span>
                    </div>
                    <div class="welcom-to-hahoot-dl-vl mx-md-1 mx-lg-2"></div>

                    <div class="welcom-to-hahoot-dl-heart font-weight-bold ">
                        <a href="#" target="_blank " class=" text-decoration-none">
                            <img src="{{ asset('/assets/front/images/hahoot/heart.svg') }}"
                                alt="icon" class="img-fluid">
                        </a>
                        <a href="">
                            <span>لیست محصولات دلخواه من</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1 d-md-flex">
                    <!-- welcom-to-hahoot-dl-cart-person -->
                    <div class="welcom-to-hahoot-dl-cart-person">
                        <div class="welcom-to-hahoot-dl-counter position-absolute text-center">
                            <span class="text-white cart-count">{{isset(Session::get('cart')->items) ?  count(Session::get('cart')->items) : 0}}</span>
                        </div>
                        {{-- <img src="{{asset('/assets/front/images/hahoot/zero.svg') }}"
                        alt="icon" class="welcom-to-hahoot-dl-counter position-absolute mr-n2"> --}}
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('/assets/front/images/hahoot/cart.svg') }}"
                                class="welcom-to-hahoot-dl-cart border d-block p-md-1 p-lg-2 mt-2 position-relative"
                                alt="icon" id="welcom-to-hahoot-dl-cart">


                            <img src="{{ asset('/assets/front/images/hahoot/person.svg') }}"
                                class="welcom-to-hahoot-dl-person border d-block p-md-1 p-lg-2 mt-3" alt="icon">
                        </a>

                        {{-- <div class="my-dropdown-menu" id="cart-items">
                            @include('load.cart')
                        </div> --}}
                        <div class="row position-absolute mx-md-0" id="my-cart-hahoot">
                            {{-- <div class="col-12 d-flex flex-row-reverse justify-content-center ">
                                <div class="row hovering-all border py-4 ">
                                    <div class="col-12 hovering d-flex">
                                        <div>
                                            <img src="{{ asset('/assets/front/images/hahoot/headset-harman.webp') }}"
                                                alt="headset-harman" class="">
                                        </div>
                                        <div class="row mx-3">
                                            <div class="col-12 d-flex flex-column text-right pr-0">
                                                <span>هدست هارمن</span>
                                                <span>HARMAN/ Soho Wireless Headset</span>
                                            </div>
                                            <div class="col-12">
                                                <div class="row d-flex py-0 mt-1">
                                                    <div
                                                        class="col-5 border border-right-0 border-left-0 d-flex justify-content-between align-items-center pl-2 pr-0">
                                                        <span>تعداد:</span>
                                                        <span class="text-muted mr-1">1 عدد</span>
                                                    </div>
                                                    <div
                                                        class="col-7 border border-left-0 d-flex justify-content-between align-items-center pr-2 pl-0">
                                                        <span>قیمت:</span>
                                                        <span class="mr-5">8/900/000RL</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex mt-3">
                                        <div class="col-5 hovering-price d-flex justify-content-between p-2">
                                            <span>قیمت:</span>
                                            <span>8/900/000RL</span>
                                        </div>
                                        <div class="col-4 hovering-see-cart px-1 py-2">
                                            <a href="#" class="text-decoration-none">
                                                <span class="text-white">مشاهده سبد خرید</span>
                                                <img src="{{ asset('/assets/front/images/hahoot/footer-btn-email.svg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-3 hovering-checkout px-1 py-2">
                                            <a href="#" class="text-decoration-none">
                                                <span class="text-white">تسویه حساب</span>
                                                <img src="{{ asset('/assets/front/images/hahoot/footer-btn-email.svg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-row-reverse justify-content-center ">

                                <div class="row hovering-all py-4 w-100">
                                    <div class="col-12 hovering d-flex">
                                        <div>
                                            <img src="{{ asset('/assets/front/images/hahoot/headset-harman.webp') }}"
                                                alt="headset-harman" class="">
                                        </div>
                                        <div class="row mx-3">
                                            <div class="col-12 d-flex flex-column text-right pr-0">
                                                <span>هدست هارمن</span>
                                                <span>HARMAN/ Soho Wireless Headset</span>
                                            </div>
                                            <div class="col-12">
                                                <div class="row d-flex py-0 mt-1">
                                                    <div
                                                        class="col-5 border border-right-0 border-left-0 d-flex justify-content-between align-items-center pl-2 pr-0">
                                                        <span>تعداد:</span>
                                                        <span class="text-muted mr-1">1 عدد</span>
                                                    </div>
                                                    <div
                                                        class="col-7 border border-left-0 d-flex justify-content-between align-items-center pr-2 pl-0">
                                                        <span>قیمت:</span>
                                                        <span class="mr-5">8/900/000RL</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex mt-3">
                                        <div class="col-5 hovering-price d-flex justify-content-between p-2">
                                            <span>قیمت:</span>
                                            <span>8/900/000RL</span>
                                        </div>
                                        <div class="col-4 hovering-see-cart px-1 py-2">
                                            <a href="#" class="text-decoration-none">
                                                <span class="text-white">مشاهده سبد خرید</span>
                                                <img src="{{asset('/assets/front/images/hahoot/flash-left.svg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="col-3 hovering-checkout px-1 py-2">
                                            <a href="#" class="text-decoration-none">
                                                <span class="text-white">تسویه حساب</span>
                                                <img src="{{asset('/assets/front/images/hahoot/flash-left.svg')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="my-dropdown-menu" class="cart-items">
                                @include('load.cart')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-11 pr-md-3 pr-lg-2 pr-xl-0 mr-xl-n4">
                    <!-- welcom-to-hahoot-dl-search  -->
                    <div class="welcom-to-hahoot-dl-search w-100 mt-2">
                        <form
                            action="{{ route('front.category', [Request::route('category'),Request::route('subcategory'),Request::route('childcategory')]) }}"
                            method="GET" class="welcom-to-hahoot-dl-search-form form-group d-flex flex-row-reverse">

                            <button type="submit" class="btn welcom-to-hahoot-dl-btn-search border-0 rounded-0 pr-2 ">
                                <img src="{{ asset('/assets/front/images/hahoot/search.svg') }}"
                                    alt="icon" class="mt-md-n3">
                            </button>

                            <input type="search" name="search"
                                class="welcom-to-hahoot-dl-input-search form-control border-0 rounded-0 shadow-none p-0 mx-n2"
                                placeholder="محصول یا برند مورد علاقه خود را جستجو کنید">


                            <div
                                class="welcom-to-hahoot-dl-new-best-seller px-md-1 d-flex align-items-center form-group form-check">
                                <!-- پرفروش -->
                                <div class="welcom-to-hahoot-dl-new d-flex align-items-center mr-1">
                                    <a href="#" class="text-decoration-none text-white mr-2">
                                        <span class="mr-4">پرفروش</span>
                                        <input class="welcom-to-hahoot-dl-checking form-check-input mx-n3" type="radio"
                                            name="sort" value="bestseller">
                                    </a>
                                </div>
                                <!-- جدید  -->
                                <div class="welcom-to-hahoot-dl-best-seller d-flex align-items-center">
                                    <a href="#" class="text-decoration-none text-white ">
                                        <span class="mr-4">جدید</span>
                                        <input class="welcom-to-hahoot-dl-checking form-check-input mx-n3" type="radio"
                                            name="sort" value="date_desc" checked>
                                    </a>

                                </div>

                                <div class="header-vl text-white mx-3"></div>
                            </div>
                        </form>
                    </div>
                    <!-- line-1  -->
                    <hr class="line ">
                    <div id="navigation-dl">
                        <ul class="nav nav-dl px-0 justify-content-between mt-md-n4">
                            <li class="nav-item">
                                <div class="text-right d-flex align-items-center">
                                    <a href="#" class="nav-link py-2 px-0 collapsed text-decoration-none"
                                        data-toggle="collapse" data-target="#submenu1-dl">
                                        <span class="menu">کالای دیجیتال</span>
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="text-right d-flex align-items-center">
                                    <a href="#" class="nav-link py-2 px-0 collapsed text-decoration-none"
                                        data-toggle="collapse" data-target="#submenu2">
                                        <span class="menu">الکترونیک</span>
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="text-right d-flex align-items-center">
                                    <a href="#" class="nav-link py-2 px-0 collapsed text-decoration-none"
                                        data-toggle="collapse" data-target="#submenu3">
                                        <span class="menu">فرهنگ و هنر</span>
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item ml-md-n3">
                                <div class="text-right d-flex align-items-center">
                                    <a href="#" class="nav-link py-2 px-0 collapsed text-decoration-none"
                                        data-toggle="collapse" data-target="#submenu4">
                                        <span class="menu">ورزش و سرگرمی</span>
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <!-- line-2  -->
                    <hr class="line mt-md-n1">
                    <div id="navigation-dl">
                        <ul class="nav nav-dl px-0 justify-content-between mt-md-n4">
                            <li class="nav-item">
                                <div class="text-right d-flex align-items-center">
                                    <a href="#" class="nav-link py-2 px-0 collapsed text-decoration-none"
                                        data-toggle="collapse" data-target="#submenu5-dl">
                                        <span class="menu">لوازم خانه</span>
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="text-right d-flex align-items-center">
                                    <a href="#" class="nav-link py-2 px-0 collapsed text-decoration-none"
                                        data-toggle="collapse" data-target="#submenu6-dl">
                                        <span class="menu">اسباب بازی</span>
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="text-right d-flex align-items-center">
                                    <a href="#" class="nav-link py-2 px-0 collapsed text-decoration-none"
                                        data-toggle="collapse" data-target="#submenu7-dl">
                                        <span class="menu">زیبایی و سلامت</span>
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>

                            <li class="nav-item ml-md-n3">
                                <div class="text-right d-flex align-items-center">
                                    <a href="#" class="nav-link py-2 px-0 collapsed text-decoration-none"
                                        data-toggle="collapse" data-target="#submenu8-dl">
                                        <span class="menu">ابزار و ملزومات</span>
                                        <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                            alt="flash down" class="flash-down float-left">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <!-- collapse-submenu1:کالای دیجیتال -->
                    <!-- collapse-submenu1sub1:موبایل -->
                    <div class="collapse" id="submenu1-dl">
                        <div class="d-flex justify-content-between">
                            <ul class="nav nav-dl px-0">
                                <li class="nav-item">
                                    <div class="text-right d-flex align-items-center px-2">
                                        <a href="#" class=" nav-link collapsed text-decoration-none px-md-0"
                                            data-toggle="collapse" data-target="#submenu1sub1-dl">
                                            <span class="submenu text-white">موبایل</span>
                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                alt="flash down" class="mt-2 mt-xl-n1 mr-xl-1 flash-down-dl float-left">
                                        </a>
                                    </div>
                                </li>
                            </ul>


                            <ul class="nav nav-dl px-0">
                                <li class="nav-item">
                                    <div class="text-right d-flex align-items-center px-2">
                                        <a href="#" class=" nav-link collapsed text-decoration-none px-md-0"
                                            data-toggle="collapse" data-target="#submenu1sub2">
                                            <span class="submenu text-white">تبلت</span>
                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                alt="flash down" class="mt-2 mt-xl-n1 mr-xl-1 flash-down-dl float-left">
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="nav nav-dl px-0">
                                <li class="nav-item">
                                    <div class="text-right d-flex align-items-center px-2">
                                        <a href="#" class=" nav-link collapsed text-decoration-none px-md-0"
                                            data-toggle="collapse" data-target="#submenu1sub3">
                                            <span class="submenu text-white">لپ تاپ</span>
                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                alt="flash down" class="mt-2 mt-xl-n1 mr-xl-1 flash-down-dl float-left">
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="nav nav-dl px-0">
                                <li class="nav-item">
                                    <div class="text-right d-flex align-items-center px-2">
                                        <a href="#" class=" nav-link collapsed text-decoration-none px-md-0"
                                            data-toggle="collapse" data-target="#submenu1sub4">
                                            <span class="submenu text-white">اپل واچ</span>
                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                alt="flash down" class="mt-2 mt-xl-n1 mr-xl-1 flash-down-dl float-left">
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="nav nav-dl px-0">
                                <li class="nav-item">
                                    <div class="text-right d-flex align-items-center px-2">
                                        <a href="#" class=" nav-link collapsed text-decoration-none px-md-0"
                                            data-toggle="collapse" data-target="#submenu1sub5">
                                            <span class="submenu text-white">کامپیوتر و تجهیزات جانبی</span>
                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                alt="flash down" class="mt-2 mt-xl-n1 mr-xl-1 flash-down-dl float-left">
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="nav nav-dl px-0">
                                <li class="nav-item">
                                    <div class="text-right d-flex align-items-center px-2">
                                        <a href="#" class=" nav-link collapsed text-decoration-none px-md-0"
                                            data-toggle="collapse" data-target="#submenu1sub6">
                                            <span class="submenu text-white">ماشین های اداری</span>
                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                alt="flash down" class="mt-2 mt-xl-n1 mr-xl-1 flash-down-dl float-left">
                                        </a>
                                    </div>
                                </li>
                            </ul>

                            <ul class="nav nav-dl px-0">
                                <li class="nav-item">
                                    <div class="text-right d-flex align-items-center px-2">
                                        <a href="#" class=" nav-link collapsed text-decoration-none px-md-0 ml-md-n2"
                                            data-toggle="collapse" data-target="#submenu1sub7">
                                            <span class="submenu text-white">اکسسوری های مربوط</span>
                                            <img src="{{ asset('/assets/front/images/hahoot/flash down.svg') }}"
                                                alt="flash down" class="mt-2 mt-xl-n1 flash-down-dl float-left">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- submenu1sub1-dl-->
                    <div class="collapse mt-5" id="submenu1sub1-dl">
                        <div class="d-md-flex">
                            <ul class="nav nav-dl px-md-0 py-md-3 justify-content-md-between w-100 submenu-dl">
                                <li class="nav-item">
                                    <div class="sub-submenu d-md-flex flex-md-column px-3">
                                        <h5>برندها</h5>
                                        <a href="#" class="text-decoration-none">Apple</a>
                                        <a href="#" class="text-decoration-none">Sony</a>
                                        <a href="#" class="text-decoration-none">Samsung</a>
                                        <a href="#" class="text-decoration-none">Microsoft</a>
                                        <a href="#" class="text-decoration-none">LG</a>
                                        <a href="#" class="text-decoration-none">Nokia</a>
                                        <a href="#" class="text-decoration-none">HTC</a>
                                        <a href="#" class="text-decoration-none">Asus</a>
                                        <a href="#" class="text-decoration-none">Huawei</a>
                                        <a href="#" class="text-decoration-none">Lenovo</a>
                                    </div>
                                </li>
                                <div class="nav-dl-vl mr-md-n3"></div>
                                <li class="nav-item">
                                    <div class="sub-submenu d-md-flex flex-md-column mr-md-n3 mr-lg-n4 mr-xl-n5">
                                        <h5>انواع گوشی</h5>
                                        <a href="#" class="text-decoration-none">دو سیم کارت</a>
                                        <a href="#" class="text-decoration-none">تک سیم کارت</a>
                                        <a href="#" class="text-decoration-none">گوشی های 4G</a>
                                        <a href="#" class="text-decoration-none">گوشی های کلاسیک</a>
                                        <a href="#" class="text-decoration-none">فبلت</a>
                                    </div>
                                </li>
                                <div class="nav-dl-vl mr-md-n2"></div>

                                <li class="nav-item">
                                    <div class="sub-submenu d-md-flex flex-md-column mr-md-n3 mr-lg-n4 mr-xl-n5">
                                        <h5>بر اساس سیستم عامل</h5>
                                        <a href="#" class="text-decoration-none">ios</a>
                                        <a href="#" class="text-decoration-none">اندروید</a>
                                        <a href="#" class="text-decoration-none">ویندوز فون</a>
                                        <a href="#" class="text-decoration-none">سایر سیستم عامل ها</a>
                                    </div>
                                </li>
                                <div class="nav-dl-vl mr-md-n2"></div>
                                <li class="nav-item">
                                    <div class="sub-submenu d-md-flex flex-md-column mr-md-n3 mr-lg-n4 mr-xl-n5">
                                        <h5>لوازم جانبی</h5>
                                        <a href="#" class="text-decoration-none">محافظ صفحه نمایش</a>
                                        <a href="#" class="text-decoration-none">کیف و کاور گوشی</a>
                                        <a href="#" class="text-decoration-none">هندزفری</a>
                                        <a href="#" class="text-decoration-none">کارت حافظه MicroSD</a>
                                        <a href="#" class="text-decoration-none">پاوربانک</a>
                                        <a href="#" class="text-decoration-none">شارژر</a>
                                        <a href="#" class="text-decoration-none">باتری گوشی</a>
                                        <a href="#" class="text-decoration-none">مونوپاد و پایه نگهدارنده</a>
                                        <a href="#" class="text-decoration-none">قلم لمسی (Stylus)</a>
                                        <a href="#" class="text-decoration-none">موارد بیشتر...</a>
                                    </div>
                                </li>
                                <div class="nav-dl-vl mr-md-n2"></div>
                                <li class="nav-item">
                                    <div class="sub-submenu d-md-flex flex-md-column mr-md-n3 mr-lg-n4 mr-xl-n5">
                                        <h5>رده کاربری</h5>
                                        <a href="#" class="text-decoration-none">مناسب بازی</a>
                                        <a href="#" class="text-decoration-none">مناسب عکاسی</a>
                                        <a href="#" class="text-decoration-none">مناسب عکاسی سلفی</a>
                                        <a href="#" class="text-decoration-none">مقاوم در برابر آب</a>
                                    </div>
                                </li>
                            </ul>

                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade d-md-none" id="my-cart-hahoot-m" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered rounded-0" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card border-0 px-4">
                <div class="d-flex justify-content-center">
                    <div class="row mx-md-0 mt-n1">
                        <div class="col-12 d-flex flex-row-reverse justify-content-center">
                            <div class="row hovering-all py-4">
                                <div class="col-12 hovering d-flex">
                                    <div>
                                        <img src="{{ asset('/assets/front/images/hahoot/headset-harman.webp') }}"
                                            alt="headset-harman">
                                    </div>
                                    <div class="row mx-3">
                                        <div class="col-12 d-flex flex-column text-right pr-0">
                                            <span>هدست هارمن</span>
                                            <span>HARMAN/ Soho Wireless Headset</span>
                                        </div>
                                        <div class="col-12">
                                            <div class="row d-flex py-0 mt-1">
                                                <div
                                                    class="col-5 border border-right-0 border-left-0 d-flex justify-content-between align-items-center pl-2 pr-0">
                                                    <span>تعداد:</span>
                                                    <span class="text-muted mr-1">1 عدد</span>
                                                </div>
                                                <div
                                                    class="col-7 border border-left-0 d-flex justify-content-between align-items-center pr-2 pl-0">
                                                    <span>قیمت:</span>
                                                    <span class="mr-5">8/900/000RL</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex mt-3">
                                    <div class="col-5 hovering-price d-flex justify-content-between p-2">
                                        <span>قیمت:</span>
                                        <span>8/900/000RL</span>
                                    </div>
                                    <div class="col-4 hovering-see-cart px-1 py-2">
                                        <a href="#" class="text-decoration-none">
                                            <span class="text-white">مشاهده سبد خرید</span>
                                            <img src="{{ asset('/assets/front/images/hahoot/flash-left.svg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="col-3 hovering-checkout px-1 py-2">
                                        <a href="#" class="text-decoration-none">
                                            <span class="text-white">تسویه حساب</span>
                                            <img src="{{ asset('/assets/front/images/hahoot/flash-left.svg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
