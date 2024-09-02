
<section class="slider">
    <div class="slider__container" style="height:60vh; border-bottom: 2rem solid rgba(0, 0, 0, 0.1);">

      @php
        $count = 0;   
      @endphp

      @foreach ($article['article']['images'] as $item)
          
       @if ($item->image_category === 'slider')    
       @if($count === 0)
       @php
        $count++;
        if(count($article['article']['images']) === 1)
        $sliderItemClass = "slider_item";
      else {
        $sliderItemClass = "slider_item active";
      }
       
        @endphp
  
      <article class={{$sliderItemClass}}>
        
        <div class="slider_item_container __2">
          
          <img src="{{url($item->image_path)}}" alt="">
          <div class="slider__title"><div class="slider__title-inner"><a href="">Le Barage d'Inga</a></div></div>
 
          <div class="slider__subtitle slider__description"><a href="">Lorem ipsum, dolor sit amet consectetur</a></div>
    
        </div>
      </article>
      @else
      <article class="slider_item">
        <div class="slider_item_container __2">
          <img src="{{url($item->image_path)}}" alt="">
          <div class="slider__title"><div class="slider__title-inner"><a href="">Le Barage d'Inga</a></div></div>
 
          <div class="slider__subtitle slider__description"><a href="">Lorem ipsum, dolor sit amet consectetur</a></div>
    
        </div>
      </article>
      @endif
      
      @endif
      @endforeach
     
    </div>
    {{-- 'assets/images/destination/parProvince/kinshasa/pullman2.jpg' --}}

    <div class="next__prev">
        <div>
          <button class="next"><i class="ri-arrow-up-double-line"></i></button>
          <button class="prev"><i class="ri-arrow-down-double-line"></i></button>  
        </div>
    </div>
   
    <div class="item__controler" style='top:58vh'>
        <div class="item_controler_container">
          <div class="slide-controler active"></div>
          <div class="slide-controler"></div>
          
         </div>
      </div>

   </section>


   {{-- <div class="slider_item_container __2">
    <img src="{{url($item->image_path)}}" alt="">
    <p>{{$item->image_path}}</p>
   <div class="slider__title"><div class="slider__title-inner"><a href="">Le Barage d'Inga</a></div></div>
 
   <div class="slider__subtitle slider__description"><a href="">Lorem ipsum, dolor sit amet consectetur</a></div>
    
   
   </div> --}}
