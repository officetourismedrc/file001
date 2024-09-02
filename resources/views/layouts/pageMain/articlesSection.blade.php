<section class="articles1 section" id="articles1">
    <div class="article1__container container">
      <div class="article1__data">
        <h1 class="section__title">Actualités et Infos</h1>
        <p class="article1-title__description">Toutes nos actualités et informations en relation avec le tourisme en RD.Congo</p>
      </div>

      <div class="article1__content grid swiper">
        <div class="article1__wrapper swiper-wrapper">
                @foreach ($actuOnt as $item)
                   
                    <article class="article1__card swiper-slide">
                      
                          <div class="article1__image">
                            @foreach($item['images'] as $img)
                            @if($img->img_category === 'thumbnail')
                            <img src="{{url($img->img_path)}}" alt="" class="article1__img">
                            @endif
                            @endforeach
                         </div>
                        <div class="article1__description">
                          <p class="articles1__snippet"><a href="{{route('misc.ont_actu',['id'=>$item->id, 'title'=> htmlentities(urlencode($item->title), ENT_QUOTES)])}}">{{$item->title}}</a></p>
                        </div>
                      
                    </article>

                @endforeach
                    {{-- <article class="article1__card swiper-slide">
                      <div class="article1__image">
                        <img src="{{url('assets/images/article_section_image/hotel_lubumbashi.jpg')}}" alt="" class="article1__img">
                      </div>
                      <div class="article1__description">
                        <p class="articles1__snippet">Lorem ipsum dolor sit amet consectetur adipisicing elit. <span>corporis quas reprehenderit</span></p>
                      </div>
                  </article>

                  <article class="article1__card swiper-slide">
                    <div class="article1__image">
                      <img src="{{url('assets/images/article_section_image/virunga-congo.jpg')}}" alt="" class="article1__img">
                    </div>
                    <div class="article1__description">
                      <p class="articles1__snippet">Lorem ipsum dolor sit amet consectetur adipisicing elit. <span>corporis quas reprehenderit</span></p>
                    </div>
                </article>

                <article class="article1__card swiper-slide">
                  <div class="article1__image">
                    <img src="{{url('assets/images/article_section_image/salonga.jpg')}}" alt="" class="article1__img">
                  </div>
                  <div class="article1__description">
                    <p class="articles1__snippet">Lorem ipsum dolor sit amet consectetur adipisicing elit. <span>corporis quas reprehenderit</span></p>
                  </div>
              </article>

              <article class="article1__card swiper-slide">
                <div class="article1__image">
                    <img src="{{url('assets/images/article_section_image/grand_hotel.webp')}}" alt="" class="article1__img">
                  </div>
                  <div class="article1__description">
                    <p class="articles1__snippet">Lorem ipsum dolor sit amet consectetur adipisicing elit. <span>corporis quas reprehenderit</span></p>
                  </div>
              </article> --}}

         </div>

         <div class="swiper-button-prev">
             <i class="ri-arrow-left-line"></i>
         </div>
      <div class="swiper-button-next">
          <i class="ri-arrow-right-line"></i>
      </div> 
      </div>

    </div>
  </section>

{{-- }P4eskspUW"*TDp --}}