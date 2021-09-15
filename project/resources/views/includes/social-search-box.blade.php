
<style>
    .box{float:right;width:95%;margin-right:2.5%;margin-top:10px;padding: 3%;padding-bottom: 0;
        min-height:50px;background: #eff4fa;border-radius: 60px;}
    .whatsapp-icon{width:25px;float: left;margin-right:2%;margin-top: 3px;}
    .insta-icon{width: 35px;float: left;margin-top: 3px;}
    .search-icon{width: 35px;float: left;margin-left: 6px;cursor: pointer;}
    .search-input{margin-right:10px;width: 80%;height: 30px;border-radius: 60px;background: #eff4fa;}
    .search-input:focus-visible{border: none !important;}
    .search-input:focus{border: none !important;}
    .contact{font-weight: bold;line-height: 35px;}
    @media (min-width:768px) and (max-width:890px)
    {
   .search-input{width: 60%;}
      .contact{font-size: 11px !important;}
    }
    @media (min-width:0px) and (max-width:767.99px)
    {
        .box{padding-top:1% !important; }
    }

</style>

<div style="width: 100%;float: right;">
<div class="row" style="margin: 0;" >

    <div class="col-md-4">

        <div class="box" >

                     <span class="contact" >
                تلفن تماس :
                             <?php
                       //  echo HomeController::fa_numbers('88065876-021');
                         ?>
                  88065876-021

            </span>


            <img class="whatsapp-icon"  src="{{asset('/assets/images/zho/whatsapp.png')}}" >
            <img class="insta-icon"  src="{{asset('/assets/images/zho/insta.png')}}" >



        </div>

    </div>

    <div class="col-md-4"></div>

    <div class="col-md-4">

        <form id="searchForm" class="search-form" action="{{ route('front.category', [Request::route('category'),Request::route('subcategory'),Request::route('childcategory')]) }}" method="GET">

        <div class="box">

            <input type="text" class="search-input" placeholder="جستجو" id="prod_name" name="search" value="{{ request()->input('search') }}"  autocomplete="off">


            <img class="search-icon"  src="{{asset('/assets/images/zho/search.png')}}" >

        </div>

        </form>

    </div>


</div>
</div>