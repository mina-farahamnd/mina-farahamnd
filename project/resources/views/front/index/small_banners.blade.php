
<style>
    .banner1{width: 95%;height:250px;margin: auto;margin-bottom:15px;border-radius:20px;box-shadow: 4px 2px 9px 3px rgba(127, 127, 127, 0.22);border: 1px solid rgba(241, 241, 241, 0.22);}
    .banner-img{width: 100%;height: 250px;}
</style>





 <div class="col-sm-12 row" style="float:right;margin: 0;margin-top: 50px;margin-bottom: 100px;">


     <?php
     $y=0;
     $w=0;
     ?>
     @if($ps->small_banner == 1)
         @foreach($top_small_banners->chunk(2) as $chunk)
             @foreach($chunk as $img)
                 @if($y>1 && $w<2)
                     <?php
                     $w=$w+1;
                     ?>

                     <div class="col-sm-6">

                         <div class="banner1">
                             <a href="{{ $img->link }}">
                                 <img class="banner-img"  src="{{asset('assets/images/banners/'.$img->photo)}}" alt="free delivery">
                             </a>
                         </div>

                     </div>


                 @endif
                 <?php
                 $y=$y+1;
                 ?>
             @endforeach
         @endforeach
     @endif

 </div>
