<div class="col-12 col-md-3 px-0 mt-3">
    <div class="filters">
        <div class="d-flex justify-content-between px-3 py-4 filters__title">
            <h6 class="text-white">فیلترهای اعمال شده</h6>
            <button class="btn mb-0 p-0">
                <h6 class="text__green">حذف فیلترها</h6>
            </button>
        </div>
        <div class="filters__group">
            <div class="form-group">
                <div class="py-4 pr-4 d-flex flex-wrap" id="filterresult">

{{--                    @if(request()->input())--}}
{{--                        @php--}}
{{--                            $req_param = request()->input();--}}
{{--                        @endphp--}}

{{--                        @foreach ($req_param as  $key => $value)--}}
{{--                            @php--}}
{{--                                $req_param_key = $key;--}}
{{--                                $req_param_value = $value[0];--}}

{{--                            @endphp--}}
{{--                            --}}{{--@foreach($value as $item)--}}
{{--                                <div class="card filters__btn h-25 m-2 remove-filter" data-remove-id="">--}}
{{--                                    <button class="btn mb-0 d-flex align-items-center">--}}
{{--                                        <span class="mb-0 text__medium text__black filters__btn__text">{{$item}}</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}

{{--                        @endforeach--}}
{{--                    @else--}}
{{--                        @php--}}
{{--                            $req_param_key = null;--}}
{{--                            $req_param_value = null;--}}
{{--                        @endphp--}}
{{--                    @endif--}}

{{--                        @php--}}
{{--                            $req_param_key = null;--}}
{{--                            $req_param_value = null;--}}
{{--                        @endphp--}}

                </div>
            </div>


            {{--
                    <div class="form-group mb-0 border__top">
                        <div class="py-4 pl-3 pr-4 d-flex align-items-center justify-content-between">
                            <p class="text__black text__medium">برندها</p>
                            <div class="input-group mr-3 filters__search--group">
                                <div class="input-group-append">
                                    <span class="input-group-text mr-2 filters__search--icon" id="filter-search">
                                        <img src="{{ asset('assets/front/icon/search.svg') }}" alt="">
                                    </span>

                                </div>
                                <input type="text" class="form-control ml-3 filters__search--input" placeholder="جستجو نام برند..." aria-describedby="filter-search">
                            </div>
                        </div>

                        <div class="py-4 pr-4 custom">
                            <div class="mt-3">
                                <input type="checkbox" id="apple">
                                <label class="mb-0 custom__label text__small text__black" for="apple">اپل</label>
                            </div>
                            <div class="mt-3">
                                <input type="checkbox" id="nokia">
                                <label class="mb-0 custom__label text__small text__black" for="nokia">نوکیا</label>
                            </div>
                            <div class="mt-3">
                                <input type="checkbox" id="lg">
                                <label class="mb-0 custom__label text__small text__black" for="lg">ال جی</label>
                            </div>
                            <div class="mt-3">
                                <input type="checkbox" id="samsung">
                                <label class="mb-0 custom__label text__small text__black" for="samsung">سامسونگ</label>
                            </div>
                            <div class="mt-3">
                                <input type="checkbox" id="huavi">
                                <label class="mb-0 custom__label text__small text__black" for="huavi">هوآوی</label>
                            </div>
                            <div class="mt-3">
                                <input type="checkbox" id="htc">
                                <label class="mb-0 custom__label text__small text__black" for="htc">اچ تی سی</label>
                            </div>
                            <div class="mt-3">
                                <input type="checkbox" id="motor">
                                <label class="mb-0 custom__label text__small text__black" for="motor">موتورلا</label>
                            </div>
                            <div class="mt-3">
                                <input type="checkbox" id="microsoft">
                                <label class="mb-0 custom__label text__small text__black" for="microsoft">مایکروسافت</label>
                            </div>
                            <div class="mt-3">
                                <input type="checkbox" id="lgx">
                                <label class="mb-0 custom__label text__small text__black" for="lgx">ال جی ایکس</label>
                            </div>
                            <div class="mt-3">
                                <input type="checkbox" id="google">
                                <label class="mb-0 custom__label text__small text__black" for="google">گوکل</label>
                            </div>
                            <div class="mt-3">
                                <input type="checkbox" id="gimo">
                                <label class="mb-0 custom__label text__small text__black" for="gimo">جیمو</label>
                            </div>
                            <!-- <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label text__small text__black" for="customCheck1">اپل</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label text__small text__black" for="customCheck1">نوکیا</label>
                            </div> -->
                        </div>
                    </div>
            --}}



       {{--     <select id="stock" name="stock" class="short-item">
                <option value="date_desc">{{$langg->lang65}}</option>
                <option value="date_asc">{{$langg->lang66}}</option>
                <option value="price_asc">{{$langg->lang67}}</option>
                <option value="price_desc">{{$langg->lang68}}</option>
            </select>--}}
            {{--<form id="attrForm" action="{{route('front.category', [Request::route('category'), Request::route('subcategory'), Request::route('childcategory')])}}" method="get">

                <div class="form-group mb-0 border__top py-4 px-4 customzing">
                    <div>
                        <input type="checkbox" id="stock" name="stock" unchecked>
                        <label class="mb-0 customzing__label text__small text__black" for="stock">فقط کالاهای موجود</label>
                    </div>
                </div>
            </form>
--}}
            @if (    (!empty($cat) && !empty(json_decode($cat->attributes, true)))
                  || (!empty($subcat) && !empty(json_decode($subcat->attributes, true)))
                  || (!empty($childcat) && !empty(json_decode($childcat->attributes, true))))


                <form id="attrForm" action="{{route('front.category', [Request::route('category'), Request::route('subcategory'), Request::route('childcategory')])}}" method="post">

                    <div class="form-group mb-0 border__top py-4 px-4 customzing">
                        <div>
                            <input type="checkbox" id="stock" name="stock" >
                            <label class="mb-0 customzing__label text__small text__black" for="stock">فقط کالاهای موجود</label>
                        </div>
                    </div>

                    @if (!empty($cat) && !empty(json_decode($cat->attributes, true)))
                        @foreach ($cat->attributes as $key => $attr)
                            <div class="form-group mb-0 border__top py-4 px-4">
                                <a href="#{{$attr->id." "}}" class="btn mb-0 d-flex justify-content-between filters__collapse filtering" role="button" aria-controls="{{$attr->id." "}}" data-toggle="collapse">
                                    <p class="text__black text__medium">{{$attr->name}}</p>
                                    <img src="{{ asset('assets/front/icon/arrow-down-black.svg') }}" alt="" class="filters__collapse--arrow" id="arrowing">

                                </a>

                                <div class="pr-2 collapse custom" id="{{$attr->id." "}}">
                                    @if($attr->search_status)
                                    <div class="input-group filters__search--group">
                                        <div class="input-group-append">
                                    <span class="input-group-text mr-2 filters__search--icon" id="filter-search">
                                        <img src="{{ asset('assets/front/icon/search.svg') }}" alt="">
                                    </span>

                                        </div>
                                        <input type="text" class="form-control ml-3 filters__search--input" placeholder="جستجو ..." aria-describedby="filter-search">
                                    </div>
                                    @endif
                                    @if (!empty($attr->attribute_options))
                                        @foreach ($attr->attribute_options as $key => $option)
                                                <div class="mt-3">
                                                <input name="{{$attr->input_name}}[]"
                                                       class="attribute-input"
                                                       type="checkbox"
                                                       id="{{$attr->input_name}}{{$option->id}}"
                                                       value="{{$option->name}}"
                                                       {{request()->exists($attr->input_name) && (request()->input($attr->input_name) == $option->name || in_array($option->name , request()->input($attr->input_name))) ? 'checked' : ''}}
                                                >
                                                <label class="mb-0 custom__label text__small text__black" for="{{$attr->input_name}}{{$option->id}}">{{$option->name}}</label>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif

                    @if (!empty($subcat) && !empty(json_decode($subcat->attributes, true)))
                        @foreach ($subcat->attributes as $key => $attr)
                            <div class="form-group mb-0 border__top py-4 px-4">
                                <a href="#{{$attr->id." "}}" class="btn mb-0 d-flex justify-content-between filters__collapse filtering" role="button" aria-controls="{{$attr->id." "}}" data-toggle="collapse">
                                    <p class="text__black text__medium">{{$attr->name}}</p>
                                    <img src="{{ asset('assets/front/icon/arrow-down-black.svg') }}" alt="" class="filters__collapse--arrow" id="arrowing">
                                </a>

                                <div class="pr-2 collapse custom" id="{{$attr->id." "}}">
                                    @if (!empty($attr->attribute_options))
                                        @foreach ($attr->attribute_options as $key => $option)
                                            <div class="mt-3">
                                                <input name="{{$attr->input_name}}[]" class="attribute-input" type="checkbox" id="{{$attr->input_name}}{{$option->id}}" value="{{$option->name}}" {{request()->exists($attr->input_name) && (request()->input($attr->input_name) == $option->name || in_array($option->name , request()->input($attr->input_name))) ? 'checked' : ''}}>
                                                <label class="mb-0 custom__label text__small text__black" for="{{$attr->input_name}}{{$option->id}}">{{$option->name}}</label>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                    @endforeach
                    @endif

                    @if (!empty($childcat) && !empty(json_decode($childcat->attributes, true)))
                        @foreach ($childcat->attributes as $key => $attr)
                            <div class="form-group mb-0 border__top py-4 px-4">
                                <a href="#{{$attr->id." "}}" class="btn mb-0 d-flex justify-content-between filters__collapse filtering" role="button" aria-controls="{{$attr->id." "}}" data-toggle="collapse">
                                    <p class="text__black text__medium">{{$attr->name}}</p>
                                    <img src="{{ asset('assets/front/icon/arrow-down-black.svg') }}" alt="" class="filters__collapse--arrow" id="arrowing">
                                </a>

                                <div class="pr-2 collapse custom" id="{{$attr->id." "}}">
                                    @if (!empty($attr->attribute_options))
                                        @foreach ($attr->attribute_options as $key => $option)
                                            <div class="mt-3">
                                                <input name="{{$attr->input_name}}[]" class="attribute-input" type="checkbox" id="{{$attr->input_name}}{{$option->id}}" value="{{$option->name}}" {{request()->exists($attr->input_name) && (request()->input($attr->input_name) == $option->name || in_array($option->name , request()->input($attr->input_name))) ? 'checked' : ''}}>
                                                <label class="mb-0 custom__label text__small text__black" for="{{$attr->input_name}}{{$option->id}}">{{$option->name}}</label>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif
                </form>

            @endif
        </div>
    </div>


</div>