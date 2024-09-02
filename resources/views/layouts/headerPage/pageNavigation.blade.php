{{-- <x-app-layout> --}}
    <nav class="nav">
        <!--=================nav header top  start===================-->
          <div class="nav__header">
            <div class="nav__header-sociaux">
                <a href="https://www.facebook.com/officetourismerdc?mibextid=LQQJ4d" class="nav__header-sociaux-link"><img class="sociaux_logo_link" src='{{url("assets/images/facebook_update.png")}}' /></a>
                <a href="https://www.instagram.com/officenationaltourisme_rdcongo?igsh=NTc4MTIwNjQ2YQ==" class="nav__header-sociaux-link"><img class="sociaux_logo_link" src='{{url("assets/images/instagram_update.png")}}' /></a>
                <a href="https://twitter.com/CongoRdtourism" class="nav__header-sociaux-link"><img class="sociaux_logo_link" src='{{url("assets/images/twitter_update.png")}}' /></a>
                 <a href="https://twitter.com/CongoRdtourism" class="nav__header-sociaux-link"><img class="sociaux_logo_link" src='{{url("assets/images/linkedIn_update.png")}}' /></a>
                <a href="https://twitter.com/CongoRdtourism" class="nav__header-sociaux-link"><img class="sociaux_logo_link" src='{{url("assets/images/tiktok_update.png")}}' /></a>
                   <a href="https://twitter.com/CongoRdtourism" class="nav__header-sociaux-link"><img class="sociaux_logo_link" src='{{url("assets/images/youtube_update.png")}}' /></a>
            </div>
            <div class="header__ex-tem">
            <div class="nav__header-exchange_rate">
                <div class="exchange-rate__container">
                    <label class="exchange-rate__icon" for="fromC"> <img class="money_exchange_icon" src="{{url('assets/images/money_exchange_icon.png')}}" alt="currency" /> </label>
                    <select name="fromCurrency" id="exchange-rate-from" class="exchange-rate__to"></select>
                    <span class="exchange-rate__is">Is</span>
                    <span class="tocurrency" id="exchange-rate__">0.0</span>
                    <span class="exchange-rate__fc">FC</span>
                </div>
            </div>
             <!--
            <div class="header__nav-temperature">
                <div class="weather__panel-1">
                <span class="header-nav__weather-city">Kinshasa</span>
                <img src="" alt="" class="header-nav_weather header-nav__weather-image">
                <span class="header-nav__weather-temperature" id="weather__temperature">temp</span>
                </div>
                <ul class="weather__panel-2">
                    <li class="weather__kinshasa weather__li">
                        <span class="weather-1" id="weather-1" >kinshasa</span>
                        <div class="weather-dynamic__1 buggy">
                       <div class="weather-panel__title">
                        <i class="ri-heart-line weather-panel__title-heart"></i>
                         <p>Kinshasa</p>
                       </div>
                       <div class="weather-panel__desc">
                         <p class="weather-panel__desc-title">
                            Partialy Foggy
                         </p>
                         <div class="weather-panel__desc-main">
                              <div class="weather-panel__desc-main-1">
                                 <p class="weather__humidity">18p</p>
                              </div>
                              <div class="weather-panel__desc-main-2">
                                <p class="weather__wind">189 km/s</p>
                              </div>
                         </div>
                       </div>
                       <div class="weather-panel__bottom">
                           <div class="weather__img">
                              <img src="{{url('assets/images/cloud.png')}}" alt="weather image" class="weather__img-image">
                           </div>
                           <div class="weather__temp">
                            <p class="temperature">
                                17 C
                            </p>
                           </div>
                       </div>
                    </div>
                    </li>
                    <li class="weather__lubumbashi weather__li">
                        <span class="weather-1" id="weather-2">lubumbashi</span>

                        <div class="weather-dynamic__1">
                        <div class="weather-panel__title">
                            <i class="ri-heart-line weather-panel__title-heart"></i>
                             <p>lubumbashi</p>
                           </div>
                           <div class="weather-panel__desc">
                             <p class="weather-panel__desc-title">
                                Partialy Foggy
                             </p>
                             <div class="weather-panel__desc-main">
                                  <div class="weather-panel__desc-main-1">
                                     <p class="weather__humidity">18p</p>
                                  </div>
                                  <div class="weather-panel__desc-main-2">
                                    <p class="weather__wind">189 km/s</p>
                                  </div>
                             </div>
                           </div>
                           <div class="weather-panel__bottom">
                               <div class="weather__img">
                                  <img src="{{url('assets/images/cloud.png')}}" alt="weather image" class="weather__img-image">
                               </div>
                               <div class="weather__temp">
                                <p class="temperature">
                                    17 C
                                </p>
                               </div>
                           </div>
                        </div>
                    </li>
                    <li class="weather__kongo-central weather__li">
                        <span class="weather-1" id="weather-3">kongo Ctl</span>
                        <div class="weather-dynamic__1">
                        <div class="weather-panel__title">
                            <i class="ri-heart-line weather-panel__title-heart"></i>
                             <p>Kongo Centr</p>
                           </div>
                           <div class="weather-panel__desc">
                             <p class="weather-panel__desc-title">
                                Partialy Foggy
                             </p>
                             <div class="weather-panel__desc-main">
                                  <div class="weather-panel__desc-main-1">
                                     <p class="weather__humidity">18p</p>
                                  </div>
                                  <div class="weather-panel__desc-main-2">
                                    <p class="weather__wind">189 km/s</p>
                                  </div>
                             </div>
                           </div>
                           <div class="weather-panel__bottom">
                               <div class="weather__img">
                                  <img src="{{url('assets/images/cloud.png')}}" alt="weather image" class="weather__img-image">
                               </div>
                               <div class="weather__temp">
                                <p class="temperature">
                                    17 C
                                </p>
                               </div>
                           </div>
                        </div>
                    </li>
                </ul>
            </div>
            -->
            
            {{-- weather new style haha!!!!!!! --}}

     <div class="meteo_container">
      <div class="meteo-content">
          <!-- top the visible part -->
             <div class="meteo_top-container">
               <div class="meteo_top-content">
                  <div class="meteo_top-title"><span>Kinshasa</span></div>
                  <div class="meteo_top-temp"><span>30 </span><span>&#176C</span></div>
                  <div class="meteo_top-img"><img src="{{url('assets/images/haze.png')}}" alt=""></div>
               </div>
             </div>
          <!-- end top the visible part  -->
             <div class="meteo-body_container">
               <div class="meteo-body__content">
                  <!-- meteo body top -->
                   <div class="meteo-body-top-contenair">
                      <div class="meteo-body-top-content">
                            <div class="meteo-bt-left">
                               <div class="meteo-bt-title">
                                  <div class="meteo-bt-title-content">
                                  <span>kinshasa</span>
                                 
                                  </div>
                               </div>

                               <div class="meteo-insert-form">
                                  <div class="mete-insert-form-content">
                                  <form action="" class="meteo-insert-form-form">
                                        <label for="">Enter city</label>
                                        <input type="text" class="meteo-insert-form-input" focus >
                                     </form>
                                  </div>
                               </div>
                               
                            </div>
                            <div class="meteo-bt-right">
                               <span class="meteo-insert_city"><i class="ri-focus-3-line"></i></span>
                            </div>

                      </div>
                      <span class="meteo-body-title-desc">Orageux</span>
                   </div>
                  <!-- meteo body top -->
                  <!-- meteo body middle -->

                  <div class="meteo-middle-container">
                    <div class="meteo-middle-content">
                        <div class="meteo-middle-icon">
                            <div class="meteo-middle-icon-content">
                               <img src="{{url('assets/images/cloud.png')}}" alt="meteo icon">
                            </div>
                        </div>
                        <div class="meteo-middle-temp-container">
                             <div class="meteo-middle-temp-content">
                               <div class="meteo-middle-temp"><span>32 </span></div><div class="meteo-middle-temp-mesure"><span class="meteo-degree">&#176C</span> <span></span></div>
                             </div>
                        </div>
                        <div class="meteo-middle-right">
                           <div class="meteo-middle-right-content">
                              <div class='meteo-middle-right-max'><i class="ri-arrow-up-double-fill"></i><span>32 </span><span class="meteo-degree">&#176C</span></div> <div class='meteo-middle-right-min'><i class="ri-arrow-down-double-fill"></i><span>32 </span><span class="meteo-degree">&#176C</span></div>
                           </div>
                        </div>
                    </div>
                  </div>
 
                  <!-- meteo body middle -->

                  <div class="meteo-middle-last-container">
                     <div class="meteo-middle-last-content">
                      <div class="meteo-middle-last-top">
                         <div class="meteo-middle-last-top-item meteo-middle-last-top-humidity"><span><i class="ri-drop-line"></i></span><span>88</span>%</div>
                         <div class="meteo-middle-last-top-item meteo-middle-last-top-wind"><i class="ri-windy-line"></i><span><span>2.1</span> </span>km/h</div>
                         <div class="meteo-middle-last-top-item meteo-middle-last-top-humidity-2"><i class="ri-cloud-line"></i><span>20</span>%</div>
                      </div>
                      <div class="meteo-middle-last-bottom">

                      </div>
                     </div>
                  </div>

               </div>
             </div>

      </div>
  </div>
          
      {{-- weather new styles haha!! --}}
         <!--ici-->
        </div>
          </div>
          <!--===================nav body end=======================-->

         
       </nav>
       <div class="nav__main-container">
        <div class="nav__container">
            <div class="nav__logo">
              
              <a  href="{{url('/')}}" class="nav__logo-link">
                  <!--company logo-->  
                   <img src="{{url('assets/images/logo_ont_noir_blanc.png')}}" alt="ont" class="logo__image">
              </a>
            </div>
  
            <div class="menu-reveal">
              <i class="ri-menu-fill"></i>
            </div>
  
                 <div class="nav__main">
              <ul class="nav-menu__container">
                  <li class="menu__link menu-principal__1">
                      <div class="menu-link__container">
                          <span >Destinations</span>
                      </div>                    
                      <div class="dropdown-menu">
                          <div class="dropdown-menu-deco"></div>
                        <ul class="dropdown-menu__links">
                            
                          <li class="dropdown-menu__link">
                              <span class="dropdown-menu-link__title">
                                <span class="dropdown-menu-link__titl">
                               Par Provinces<!-- Menu secondaire 1.1 -->
                               </span>
                              </span>
                              <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                              <div class="submenu-dopdown .par-province">
                                <!-- ici le code que tu as enlévé -->
                                <div class="submenu-dropdown-group--container">
                              @foreach ($provinceLien as $item)

                              
                                  
                              <div class="submenu-dropdown__group">
                                <div class="submenu-dropdown__group-title">
                                    <div>
                                        <span class="group-icon"></span>
                                    </div>
                                        <span class="group-title"></span>
                                       
                                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                </div>
                                <div class="group-container">
                                   <ul class="group-links">
                                    <li class="group-list">
                                        <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                                        <div class="destination-province_content">
                                         @php
                                           $className = "province-map ".$item->province_name
                                         @endphp
                                          <div class="{{$className}}">
                                              @include('layouts.mapfile.mapDestinationProvince')
                                          </div>
                                          <div class="province-desc">
                                            <a href="{{route('province.article',['province'=>$item->province_name,'id'=>$item->province_article_id,'name'=>$item->province_article_name])}}" class="province-link"><i class="ri-add-line"></i> {{$item->province_name}}</a>
                                            <div class="province-district">
                                                 @foreach ($item->ProvinceDivision as $sd_item)
                                                     <a href="" class="province-district_link"><i class="ri-arrow-right-line"></i>{{$sd_item->province_division_name}}</a>
                                                 @endforeach
                                              
                                             
                                            </div>
                                          </div>
                                        </div>
                                    </li>
                                    <!-- <li class="group-list">
                                        <a href="" class="group-link">lien 1.1.1.2</a>
                                    </li>
                                     -->
                                   </ul>
                                </div>
                            </div>

                          
                              @endforeach
                              </div>
                              
                              
                              </div>
                             
                          </li>
  
                                                    <li class="dropdown-menu__link">
                              <span class="dropdown-menu-link__title">
                                <span class="dropdown-menu-link__titl">
                                Par Villes <!-- Menu secondaire 1.2 -->
                                </span>
                              </span>
                              <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                              <div class="submenu-dopdown par-ville">
                               @php
                                   $parcitycount=5;
                                   $parcitydata = [
                                    ['province'=>"Kinshasa",'city'=>['Kinshasa']],
                                    ['province'=>"Kongo-central",'city'=>['Boma','Kisantu','Matadi','Mbanwa Ngungu','Moanda']],
                                    ['province'=>"Kasaï",'city'=>['Mbuji Mayi']],
                                    ['province'=>"Nord-Kivu",'city'=>['Goma']],
                                    ['province'=>"Sud-Kivu",'city'=>['Bukavu']],
                                    ['province'=>"Tshopo",'city'=>['Kisangani']],
                                    ['province'=>"Lualaba",'city'=>['Kolwezi']],
                                    ['province'=>"Equateur",'city'=>['Mbandaka']]
                                    ]
                               @endphp
                               <div class="submenu-dropdown-group--container">
                                @foreach ($provinceLien as $item)
                                <div class="submenu-dropdown__group">
                                  <div class="submenu-dropdown__group-title">
                                      <div>
                                          <span class="group-icon"></span>
                                      </div>
                                          <span class="group-title"></span>
                                         
                                      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  </div>
                                  <div class="group-container">
                                     <ul class="group-links">
                                      <li class="group-list">
                                          <!-- <a href="" class="group-link">lien 1.1.1.1</a> -->
                                          <div class="destination-province_content">
                                           
                                            <div class="province-map kongo-central">
                                                {{-- @include('layouts.mapfile.mapDestinationProvince') --}}
                                            </div>
                                            <div class="province-desc">
                                              <a href="#" class="province-link"><i class="ri-add-line"></i>{{$item->province_name}}</a>
                                              <div class="province-district">
                                              @foreach ($item->ProvinceDivision as $sd_item)
                                                  @foreach ($sd_item->provinceSousDivisionArticle as $sdArticle_item)
                                                   <a href="{{route('province.division.article',
                                                   ['province_id'=>$item->province_id,
                                                    'sd_id'=>$sd_item->province_division_id,
                                                    'article_id'=>$sdArticle_item->sd_article_id])}}" class="province-district_link"><i class="ri-arrow-right-line"></i>{{$sd_item->province_division_name}}</a>
                                                     @endforeach
                                                @endforeach
                                            
                                              </div>
                                            </div>
                                          </div>
                                      </li>
                                      <!-- <li class="group-list">
                                          <a href="" class="group-link">lien 1.1.1.2</a>
                                      </li>
                                       -->
                                     </ul>
                                  </div>
                              </div>

                               @endforeach
                            
                              </div>
                          </li>

                          <li class="dropdown-menu__link">
                            <span class="dropdown-menu-link__title">
                              <span class="dropdown-menu-link__titl">
                              Themes de voyage <!-- Menu secondaire 1.2 -->
                              </span>
                            </span>
                            <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                            <div class="submenu-dopdown theme-voyage">
                                <div class="submenu-dropdown-group--container">
                                    
                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                            {{-- <span class="group-icon"><i class="ri-home-gear-line"></i></span> --}}
                                        </div>

                                        <span class="group-title"></span>
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        <span class="group-icon"></span>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                           <div class="theme-voyage__lists">
                                               <span class="theme-voyage-title">Nature</span>
                                              <div class='theme-voyage__content'>
                                              <a class="theme-voyage__link">link 1</a>
                                              <a class="theme-voyage__link">link 2</a>
                                              <a class="theme-voyage__link">link 3</a>
                                              <a class="theme-voyage__link">link 4</a>
                                              <a class="theme-voyage__link">link 5</a>
                                              {{-- <> --}}
                                              </div>
                                              
                                          
                                           </div>

                                           <div class="theme-voyage__lists">
                                            <span class="theme-voyage-title">Plein air</span>
                                           <div class='theme-voyage__content'>
                                           <a class="theme-voyage__link">link 1</a>
                                           <a class="theme-voyage__link">link 2</a>
                                           <a class="theme-voyage__link">link 3</a>
                                           <a class="theme-voyage__link">link 4</a>
                                           <a class="theme-voyage__link">link 5</a>
                                           {{-- <> --}}
                                           </div>
                                           
                                       
                                        </div>

                                        <div class="theme-voyage__lists">
                                          <span class="theme-voyage-title">Mines</span>
                                         <div class='theme-voyage__content'>
                                         <a class="theme-voyage__link">Kolwezi</a>
                                         <a class="theme-voyage__link">Lubumbashie</a>
                                         <a class="theme-voyage__link">Maniema</a>
                                         <a class="theme-voyage__link">Kasaï</a>
                                        
                                         {{-- <> --}}
                                         </div>
                                         
                                     
                                      </div>

                                      <div class="theme-voyage__lists">
                                        <span class="theme-voyage-title">Cuisine</span>
                                       <div class='theme-voyage__content'>
                                       <a class="theme-voyage__link">Cuisine Française</a>
                                       <a class="theme-voyage__link">Cuisine Italienne</a>
                                       <a class="theme-voyage__link">Cuisine Chinoise</a>
                                        <a class="theme-voyage__link">Cuisine Congolaise</a>
                                       {{-- <> --}}
                                       </div>
                                    </div>
                                    
                                    <div class="theme-voyage__lists">
                                        <span class="theme-voyage-title">Art</span>
                                       <div class='theme-voyage__content'>
                                       <a class="theme-voyage__link">link 1</a>
                                       <a class="theme-voyage__link">link 2</a>
                                       <a class="theme-voyage__link">link 3</a>
                                       <a class="theme-voyage__link">link 4</a>
                                       <a class="theme-voyage__link">link 5</a>
                                       {{-- <> --}}
                                       </div>
                                    </div>
                                    
                                    <div class="theme-voyage__lists">
                                        <span class="theme-voyage-title">Villes</span>
                                       <div class='theme-voyage__content'>
                                       <a class="theme-voyage__link">Kinshasa</a>
                                       <a class="theme-voyage__link">Moanda</a>
                                       <a class="theme-voyage__link">Kinsantu</a>
                                       <a class="theme-voyage__link">Goma</a>
                                        <a class="theme-voyage__link">Kolwezi</a>
                                       <a class="theme-voyage__link"></a>
                                       {{-- <> --}}
                                       </div>
                                    </div>

                                    
                                

                                        </li>
                                       </ul>
                                    </div>
                                </div>

                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                            {{-- <span class="group-icon"><i class="ri-home-gear-line"></i></span> --}}
                                        </div>

                                        <span class="group-title"></span>
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        <span class="group-icon"></span>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                           <div class="voyage-theme__img">
                                           <a href='' > <img src="{{url('assets/images/destination/parVille/okapi.jpg')}}" alt="" class="voyage-theme__image"> </a>
                                           </div>
                                           <div class="voyage-theme__img">
                                           <a href='' > <img src="{{url('assets/images/destination/parVille/pullman2.jpg')}}" alt="" class="voyage-theme__image"> </a>
                                          </div>
                                          <div class="voyage-theme__img">
                                           <a href='' > <img src="{{url('assets/images/destination/parVille/ruwenzori-3.jpg')}}" alt="" class="voyage-theme__image"> </a>
                                          </div>
                                          <div class="voyage-theme__img">
                                           <a href='' > <img src="{{url('assets/images/destination/parVille/okapi.jpg')}}" alt="" class="voyage-theme__image"> </a>
                                          </div>
                                        </li>
                                       </ul>
                                    </div>
                                </div>
                  
                                </div>
                                
                            </div>
                        </li>
                        </ul>
                      </div>
                  </li>
                 
                 
                  <li class="menu__link menu-principal__3">
                      <div class="menu-link__container">
                          <span >Se préparer </span>   
                      </div>

                      <div class="dropdown-menu">
                        <div class="dropdown-menu-deco"></div>
                      <ul class="dropdown-menu__links">
                        <li class="dropdown-menu__link">
                            <span class="dropdown-menu-link__title">
                              <span class="dropdown-menu-link__titl">
                             A propos de la RDC<!-- Menu secondaire 1.1 -->
                             </span>
                            </span>
                            <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                            <div class="submenu-dopdown">
                                <div class="submenu-dropdown-group--container">
                                
                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                            <span class="group-icon"></span>
                                        </div>
                                            <span class="group-title"></span>
                                           
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                           
                                          {{-- ici sera  --}}

                                          <div class="se-preparer_link-content">
                                          <span class="se-preparer_title"><i class="ri-add-line"></i>Les lieux emblématiques</span>
                                          <div class="se-preparer__links-container">
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> L'échangeur de Kinshasa</a>
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> La gare centrale de Kinshasa</a>
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> Le jardin Botanique de Kinsantu</a>
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> Le pont Maréchal</a>
                                           
                                          </div>
                                          </div>

                                          <div class="se-preparer_link-content">
                                            <span class="se-preparer_title"><i class="ri-add-line"></i>Saisons, Topographie, Climats</span>
                                            <div class="se-preparer__links-container">
                                              <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> Saison des pluies</a>
                                              <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> Saison seche</a>
                                              <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> Topographie</a>
                                              
                                            </div>
                                            </div>

                                            

                                        
                                               
                                        </li>
                                       </ul>
                                    </div>
                                </div>

                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                        <span class="group-icon"></span>
                                        </div>
                                        <span class="group-title"></span>
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                         {{-- ici sera --}}
                                         <div class="se-preparer_images">
                                         <a href=''> <img src="{{url('assets/images/sePreparer/aProposRdc/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" /></a>
                                        <span class="se-preparer-img-desc">lien descr </span>
                                         </div>
                                         <div class="se-preparer_images">
                                           <a href=''><img src="{{url('assets/images/sePreparer/aProposRdc/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" /> </a>
                                          <span class="se-preparer-img-desc">lien descr </span>
                                         </div>
                                         <div class="se-preparer_images">
                                          <a href=''> <img src="{{url('assets/images/sePreparer/aProposRdc/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" /> </a>
                                          <span class="se-preparer-img-desc">lien descr </span>
                                         </div>
                                         <div class="se-preparer_images">
                                           <a href=''><img src="{{url('assets/images/sePreparer/aProposRdc/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" /> </a>
                                          <span class="se-preparer-img-desc">lien descr </span>
                                         </div>

                                        </li>
                                       </ul>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </li>

                        <li class="dropdown-menu__link">
                            <span class="dropdown-menu-link__title">
                              <span class="dropdown-menu-link__titl">
                              Planifier <!-- Menu secondaire 1.2 -->
                              </span>
                            </span>
                            <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                            <div class="submenu-dopdown">
                                
                                <div class="submenu-dropdown-group--container">
                                
                              <div class="submenu-dropdown__group">
                                  <div class="submenu-dropdown__group-title">
                                      <div>
                                          <span class="group-icon"></span>
                                      </div>
                                          <span class="group-title"></span>
                                         
                                      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  </div>
                                  <div class="group-container">
                                     <ul class="group-links">
                                      <li class="group-list">
                                         
                                        {{-- ici sera  --}}

                                        <div class="se-preparer_link-content">
                                       
                                        <div class="se-preparer__links-container">
                                          <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> Venir en RD. Congo</a>
                                          <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> Passeport et formalités</a>
                                          <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> Assurances voyage</a>
                                          <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> Wifi et connectivité</a>
                                           <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> Applications utiles</a>
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> 10 choses à savoir avant de partir</a>
                                             <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> Conseils généreaux</a>
                                        </div>
                                        </div>

                                        <div class="se-preparer_link-content">
                                         
                                          <div class="se-preparer__links-container">
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i>Guides touristiques</a>
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i>Agence des voyages</a>
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i>Tour opérateur</a>
                                            
                                          </div>
                                          </div>

                                          <div class="se-preparer_link-content">
                                           
                                            <div class="se-preparer__links-container">
                                              <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i>Brochures touristiques</a>
                                              <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i>lignes téléphonique d'assistance aux visiteurs</a>
                                              <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i>link1</a>
                                             
                                            </div>
                                            </div>

                                           
                                      </li>
                                     </ul>
                                  </div>
                              </div>

                              <div class="submenu-dropdown__group">
                                  <div class="submenu-dropdown__group-title">
                                      <div>
                                      <span class="group-icon"></span>
                                      </div>
                                      <span class="group-title"></span>
                                      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                      
                                  </div>
                                  <div class="group-container">
                                     <ul class="group-links">
                                      <li class="group-list">
                                       {{-- ici sera --}}
                                       <div class="se-preparer_images">
                                        <img src="{{url('assets/images/sePreparer/planifier/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                      <span class="se-preparer-img-desc">lien descr </span>
                                       </div>
                                       <div class="se-preparer_images">
                                        <img src="{{url('assets/images/sePreparer/planifier/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                        <span class="se-preparer-img-desc">lien descr </span>
                                       </div>
                                       <div class="se-preparer_images">
                                        <img src="{{url('assets/images/sePreparer/planifier/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                        <span class="se-preparer-img-desc">lien descr </span>
                                       </div>
                                       <div class="se-preparer_images">
                                        <img src="{{url('assets/images/sePreparer/planifier/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                        <span class="se-preparer-img-desc">lien descr </span>
                                       </div>

                                      </li>
                                     </ul>
                                  </div>
                              </div>
                              
                              </div>
                              
                          </div>
                        </li>

                        <li class="dropdown-menu__link">
                          <span class="dropdown-menu-link__title">
                            <span class="dropdown-menu-link__titl">
                            Itinéraires <!-- Menu secondaire 1.2 -->
                            </span>
                          </span>
                          <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                          <div class="submenu-dopdown">
                              
                              <div class="submenu-dropdown-group--container">
                                  
                            <div class="submenu-dropdown__group">
                                <div class="submenu-dropdown__group-title">
                                    <div>
                                        <span class="group-icon"></span>
                                    </div>
                                        <span class="group-title"></span>
                                       
                                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                </div>
                                <div class="group-container">
                                   <ul class="group-links">
                                    <li class="group-list">
                                       
                                      {{-- ici sera  --}}

                                      <div class="se-preparer_link-content">
                                      
                                      <div class="se-preparer__links-container">
                                        <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                        <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                        <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                       
                                      </div>
                                      </div>
                                      <div class="se-preparer_link-content">
                                       
                                        <div class="se-preparer__links-container">
                                          <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                          <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                          <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                          
                                        </div>
                                        </div>
                                        <div class="se-preparer_link-content">
                                          
                                          <div class="se-preparer__links-container">
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                            
                                          </div>
                                          </div>
                                          
                                    </li>
                                   </ul>
                                </div>
                            </div>

                            <div class="submenu-dropdown__group">
                                <div class="submenu-dropdown__group-title">
                                    <div>
                                    <span class="group-icon"></span>
                                    </div>
                                    <span class="group-title"></span>
                                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                    
                                </div>
                                <div class="group-container">
                                   <ul class="group-links">
                                    <li class="group-list">
                                     {{-- ici sera --}}
                                     <div class="se-preparer_images">
                                      <img src="{{url('assets/images/sePreparer/itineraire/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                    <span class="se-preparer-img-desc">lien descr </span>
                                     </div>
                                     <div class="se-preparer_images">
                                      <img src="{{url('assets/images/sePreparer/itineraire/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                      <span class="se-preparer-img-desc">lien descr </span>
                                     </div>
                                     <div class="se-preparer_images">
                                      <img src="{{url('assets/images/sePreparer/itineraire/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                      <span class="se-preparer-img-desc">lien descr </span>
                                     </div>
                                     <div class="se-preparer_images">
                                      <img src="{{url('assets/images/sePreparer/itineraire/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                      <span class="se-preparer-img-desc">lien descr </span>
                                     </div>

                                    </li>
                                   </ul>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                      </li>

                      <li class="dropdown-menu__link">
                        <span class="dropdown-menu-link__title">
                          <span class="dropdown-menu-link__titl">
                          Se Déplacer et Dormir <!-- Menu secondaire 1.2 -->
                          </span>
                        </span>
                        <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                        <div class="submenu-dopdown">
                            
                            <div class="submenu-dropdown-group--container">
                            
                          <div class="submenu-dropdown__group">
                              <div class="submenu-dropdown__group-title">
                                  <div>
                                      <span class="group-icon"></span>
                                  </div>
                                      <span class="group-title"></span>
                                     
                                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                              </div>
                              <div class="group-container">
                                 <ul class="group-links">
                                  <li class="group-list">
                                     
                                    {{-- ici sera  --}}

                                    <div class="se-preparer_link-content">
                                    <span class="se-preparer_title"><i class="ri-add-line"></i>title 1</span>
                                    <div class="se-preparer__links-container">
                                      <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                      <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                      <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                      
                                    </div>
                                    </div>
                                    <div class="se-preparer_link-content">
                                      <span class="se-preparer_title"><i class="ri-add-line"></i>title 1</span>
                                      <div class="se-preparer__links-container">
                                        <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                        <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                        <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                        
                                      </div>
                                      </div>
                                      <div class="se-preparer_link-content">
                                        <span class="se-preparer_title"><i class="ri-add-line"></i>title 1</span>
                                        <div class="se-preparer__links-container">
                                          <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                          <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                          <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                          
                                        </div>
                                        </div>
                                        <div class="se-preparer_link-content">
                                          <span class="se-preparer_title"><i class="ri-add-line"></i>title 1</span>
                                          <div class="se-preparer__links-container">
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                            <a class="se-preparer_link" href="" ><i class="ri-arrow-right-line"></i> link1</a>
                                            
                                          </div>
                                          </div>
                                          
                                  </li>
                                 </ul>
                              </div>
                          </div>

                          <div class="submenu-dropdown__group">
                              <div class="submenu-dropdown__group-title">
                                  <div>
                                  <span class="group-icon"></span>
                                  </div>
                                  <span class="group-title"></span>
                                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  
                              </div>
                              <div class="group-container">
                                 <ul class="group-links">
                                  <li class="group-list">
                                   {{-- ici sera --}}
                                   <div class="se-preparer_images">
                                    <img src="{{url('assets/images/sePreparer/deplacerDormir/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                  <span class="se-preparer-img-desc">lien descr </span>
                                   </div>
                                   <div class="se-preparer_images">
                                    <img src="{{url('assets/images/sePreparer/deplacerDormir/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                    <span class="se-preparer-img-desc">lien descr </span>
                                   </div>
                                   <div class="se-preparer_images">
                                    <img src="{{url('assets/images/sePreparer/deplacerDormir/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                    <span class="se-preparer-img-desc">lien descr </span>
                                   </div>
                                   <div class="se-preparer_images">
                                    <img src="{{url('assets/images/sePreparer/deplacerDormir/ruwenzori-3.jpg')}}" class="se-preparer_img" alt="" />
                                    <span class="se-preparer-img-desc">lien descr </span>
                                   </div>

                                  </li>
                                 </ul>
                              </div>
                          </div>
                          
                          </div>
                      </div>
                    </li>
                      </ul>
                    </div>
                      
                  </li>

                  <!-- start menu a faire -------------- -->

                  <li class="menu__link menu-principal__2">
                      <div class="menu-link__container">
                       
                          <span >A faire</span>
                      
                        </div> 
                      <div class="dropdown-menu">
                          <div class="dropdown-menu-deco"></div>
                        <ul class="dropdown-menu__links">
                          <li class="dropdown-menu__link show-group">    
                              <span class="dropdown-menu-link__title">
                                <span class="dropdown-menu-link__titl">
                                  Nature et activités de plein air<!-- Menu secondaire 2.1 -->
                                </span>
                                </span>
                              <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                              <div class="submenu-dopdown">
                                  
                                  <div class="submenu-dropdown-group--container">
                                  
                                  <div class="submenu-dropdown__group">
                                      <div class="submenu-dropdown__group-title">
                                          <span class="group-title"></span>
                                          <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                          <span class="group-icon"></span>
                                      </div>
                                      <div class="group-container">
                                         <ul class="group-links">
                                          <li class="group-list">
                                               <div class="group-list__content">
                                                <span class="group-list__title"><i class="ri-add-line"></i>link title</span>
                                              <div class="group-list__links">
                                                <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                                <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                                <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                                
                                              </div>

                                               </div>

                                               <div class="group-list__content">
                                                <span class="group-list__title"><i class="ri-add-line"></i> link title</span>
                                              <div class="group-list__links">
                                                <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                                <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                                <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                                
                                              </div>

                                               </div>
                                          </li>
                                         </ul>
                                      </div>
                                  </div>
  
                                  <div class="submenu-dropdown__group">
                                      <div class="submenu-dropdown__group-title">
                                          <span class="group-title"></span>
                                          <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                          <span class="group-icon"></span>
                                      </div>
                                      <div class="group-container">
                                         <ul class="group-links">
                                          <li class="group-list">
                                            <div class="group-list__images">
                                              <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                              <span class="group-list__img-desc">image lien</span>
                                            </div>
                                            <div class="group-list__images">
                                              <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                              <span class="group-list__img-desc">image lien</span> 
                                            </div>
                                              <div class="group-list__images">
                                                <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                                <span class="group-list__img-desc">image lien</span>  
                                              </div>
                                                <div class="group-list__images">
                                                  <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                                  <span class="group-list__img-desc">image lien</span> 
                                                </div>
                                          </li>
                                         </ul>
                                      </div>
                                  </div>
                                  
                                  </div>
                              </div>
                          </li>

                          <li class="dropdown-menu__link show-group">    
                            <span class="dropdown-menu-link__title">
                              <span class="dropdown-menu-link__titl">
                                Tradition<!-- Menu secondaire 2.1 -->
                              </span>
                              </span>
                            <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                            <div class="submenu-dopdown">
                                
                                <div class="submenu-dropdown-group--container">
                                
                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <span class="group-title"></span>
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        <span class="group-icon"></span>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                          
                                            <div class="group-list__content">
                                             <span class="group-list__title"><i class="ri-add-line"></i>link title</span>
                                           <div class="group-list__links">
                                             <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                             <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                             <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                             
                                           </div>

                                            </div>

                                            <div class="group-list__content">
                                             <span class="group-list__title"><i class="ri-add-line"></i>link title</span>
                                           <div class="group-list__links">
                                             <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                             <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                             <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                             
                                           </div>

                                            </div>
                                       
                                        </li>
                                       </ul>
                                    </div>
                                </div>

                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                       {{-- <span class="group-title">en-tête groupe 2.1.2</span> --}}
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        <span class="group-icon"></span>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                          <div class="group-list__images">
                                            <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                            <span class="group-list__img-desc">image lien</span>
                                          </div>
                                          <div class="group-list__images">
                                            <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                            <span class="group-list__img-desc">image lien</span> 
                                          </div>
                                            <div class="group-list__images">
                                              <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                              <span class="group-list__img-desc">image lien</span>  
                                            </div>
                                              <div class="group-list__images">
                                                <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                                <span class="group-list__img-desc">image lien</span> 
                                              </div>
                                        </li>
                                       </ul>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </li>

                        <li class="dropdown-menu__link show-group">    
                          <span class="dropdown-menu-link__title">
                            <span class="dropdown-menu-link__titl">
                              Gastronomie<!-- Menu secondaire 2.1 -->
                            </span>
                            </span>
                          <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                          <div class="submenu-dopdown">
                              
                              <div class="submenu-dropdown-group--container">
                              
                              <div class="submenu-dropdown__group">
                                  <div class="submenu-dropdown__group-title">
                                      <span class="group-title"> </span>
                                      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                      <span class="group-icon"></span>
                                  </div>
                                  <div class="group-container">
                                     <ul class="group-links">
                                      <li class="group-list">
                                      
                                          <div class="group-list__content">
                                           <span class="group-list__title"><i class="ri-add-line"></i> link title</span>
                                         <div class="group-list__links">
                                           <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                           <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                           <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                          
                                         </div>

                                          </div>

                                          <div class="group-list__content">
                                           <span class="group-list__title"><i class="ri-add-line"></i>link title</span>
                                         <div class="group-list__links">
                                           <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                           <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                           <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                           
                                         </div>

                                          </div>
                                     </li>
                                    
                                     </ul>
                                  </div>
                              </div>

                              <div class="submenu-dropdown__group">
                                  <div class="submenu-dropdown__group-title">
                                      <span class="group-title"></span>
                                      <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                      <span class="group-icon"></span>
                                  </div>
                                  <div class="group-container">
                                     <ul class="group-links">
                                      <li class="group-list">
                                        <div class="group-list__images">
                                          <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                          <span class="group-list__img-desc">image lien</span>
                                        </div>
                                        <div class="group-list__images">
                                          <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                          <span class="group-list__img-desc">image lien</span> 
                                        </div>
                                          <div class="group-list__images">
                                            <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                            <span class="group-list__img-desc">image lien</span>  
                                          </div>
                                            <div class="group-list__images">
                                              <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                              <span class="group-list__img-desc">image lien</span> 
                                            </div>
                                      </li>
                                     </ul>
                                  </div>
                              </div>
                              
                              </div>
                              
                          </div>
                      </li>

                      <li class="dropdown-menu__link show-group">    
                        <span class="dropdown-menu-link__title">
                          <span class="dropdown-menu-link__titl">
                            Art et Artisanat<!-- Menu secondaire 2.1 -->
                          </span>
                          </span>
                        <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                        <div class="submenu-dopdown">
                            
                            <div class="submenu-dropdown-group--container">
                            
                            <div class="submenu-dropdown__group">
                                <div class="submenu-dropdown__group-title">
                                    <span class="group-title"></span>
                                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                    <span class="group-icon"></span>
                                </div>
                                <div class="group-container">
                                   <ul class="group-links">
                                    <li class="group-list">
                                      
                                        <div class="group-list__content">
                                         <span class="group-list__title"><i class="ri-add-line"></i>link title</span>
                                       <div class="group-list__links">
                                         <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                         <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                         <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                         
                                       </div>

                                        </div>

                                        <div class="group-list__content">
                                         <span class="group-list__title"><i class="ri-add-line"></i>link title</span>
                                       <div class="group-list__links">
                                         <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                         <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                         <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                         
                                       </div>

                                        </div>
                                   </li>
                              
                                   </ul>
                                </div>
                            </div>

                            <div class="submenu-dropdown__group">
                                <div class="submenu-dropdown__group-title">
                                   {{-- <span class="group-title">en-tête groupe 2.1.2</span> --}}
                                    <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                    <span class="group-icon"></span>
                                </div>
                                <div class="group-container">
                                   <ul class="group-links">
                                    <li class="group-list">
                                      <div class="group-list__images">
                                        <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                        <span class="group-list__img-desc">image lien</span>
                                      </div>
                                      <div class="group-list__images">
                                        <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                        <span class="group-list__img-desc">image lien</span> 
                                      </div>
                                        <div class="group-list__images">
                                          <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                          <span class="group-list__img-desc">image lien</span>  
                                        </div>
                                          <div class="group-list__images">
                                            <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                            <span class="group-list__img-desc">image lien</span> 
                                          </div>
                                    </li>
                                   </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown-menu__link show-group">    
                      <span class="dropdown-menu-link__title">
                        <span class="dropdown-menu-link__titl">
                          Villes et Pop culture<!-- Menu secondaire 2.1 -->
                        </span>
                        </span>
                      <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                      <div class="submenu-dopdown">
                          
                          <div class="submenu-dropdown-group--container">
                          
                          <div class="submenu-dropdown__group">
                              <div class="submenu-dropdown__group-title">
                                  <span class="group-title"></span>
                                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  <span class="group-icon"></span>
                              </div>
                              <div class="group-container">
                                 <ul class="group-links">
                                  <li class="group-list">
                                    
                                      <div class="group-list__content">
                                       <span class="group-list__title"><i class="ri-add-line"></i> link title</span>
                                     <div class="group-list__links">
                                       <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                       <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                       <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                       
                                     </div>

                                      </div>

                                      <div class="group-list__content">
                                       <span class="group-list__title"><i class="ri-add-line"></i> link title</span>
                                     <div class="group-list__links">
                                       <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                       <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                       <a class="group-list__link"><i class="ri-arrow-right-line"></i> link 1</a>
                                      
                                     </div>

                                      </div>
                            
                                  </li>
                                 </ul>
                              </div>
                          </div>

                          <div class="submenu-dropdown__group">
                              <div class="submenu-dropdown__group-title">
                                 {{-- <span class="group-title">en-tête groupe 2.1.2</span> --}}
                                  <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                  <span class="group-icon"></span>
                              </div>
                              <div class="group-container">
                                 <ul class="group-links">
                                  <li class="group-list">
                                    <div class="group-list__images">
                                      <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                      <span class="group-list__img-desc">image lien</span>
                                    </div>
                                    <div class="group-list__images">
                                      <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                      <span class="group-list__img-desc">image lien</span> 
                                    </div>
                                      <div class="group-list__images">
                                        <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                        <span class="group-list__img-desc">image lien</span>  
                                      </div>
                                        <div class="group-list__images">
                                          <img src="{{url('assets/images/aFaire/natureActivite/ruwenzori-3.jpg')}}" alt="" class="type-sejour__image">
                                          <span class="group-list__img-desc">image lien</span> 
                                        </div>
                                  </li>
                                 </ul>
                              </div>
                          </div>
                          
                          </div>
                      </div>
                  </li>
                        </ul>
                      </div>
                  </li>

                  <!-- end menu a faire ------------- -->
                  <li class="menu__link menu-principal__4">
                      <div class="menu-link__container">
                          <span >Actu & Infos</span>   
                      </div>

                      <div class="dropdown-menu">
                        <div class="dropdown-menu-deco"></div>
                      <ul class="dropdown-menu__links">
                        <li class="dropdown-menu__link">
                            <span class="dropdown-menu-link__title">
                              <span class="dropdown-menu-link__titl">
                             <!-- Menu secondaire 1.1 -->
                             </span>
                            </span>
                            <i class="ri-arrow-down-double-fill dropdown-menu__link-icon"></i>
                            <div class="submenu-dopdown">
                                <div class="submenu-dropdown-group--container">
                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                            <span class="group-icon"><i class="ri-home-gear-line"></i></span>
                                        </div>
                                            <span class="group-title"></span>
                                           
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                            <a href="" class="group-link">Actualités</a>
                                        </li>
                                        <li class="group-list">
                                            <a href="" class="group-link">Newsletters</a>
                                        </li>
                                       </ul>
                                    </div>
                                </div>

                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                        <div>
                                        <span class="group-icon"><i class="ri-home-gear-line"></i></span>
                                        </div>
                                        <span class="group-title"></span>
                                        <i class="ri-arrow-down-double-fill submenu-dropdown__group-title-icon"></i>
                                        
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                            <a href="" class="group-link">Information des nos partenaires</a>
                                        </li>
                                        <li class="group-list">
                                            <a href="" class="group-link">Articles des voyages</a>
                                        </li>
                                       </ul>
                                    </div>
                                </div>

</div>
{{-- 
                                <div class="menu-partenaires__marquee-container" >
                                  <div class="marquee">
                                    <ul class="marquee-elmts">
                                        <li>
                                          <div class="menu-marquee__image">
                                             <img src="{{url('assets/images/menu_marquee/lola-ya-bonobo.webp')}}" alt="" class="menu-marquee__img">
                                          </div>
                                        </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                            <img src="{{url('assets/images/menu_marquee/aqua-splash.jpg')}}" alt="" class="menu-marquee__img">
                                         </div>
                                        </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                          <img src="{{url('assets/images/menu_marquee/virunga.webp')}}" alt="" class="menu-marquee__img">
                                       </div>
                                      </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                            <img src="{{url('assets/images/menu_marquee/lola-ya-bonobo.webp')}}" alt="" class="menu-marquee__img">
                                         </div>
                                        </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                            <img src="{{url('assets/images/menu_marquee/aqua-splash.jpg')}}" alt="" class="menu-marquee__img">
                                         </div>
                                        </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                            <img src="{{url('assets/images/menu_marquee/virunga.webp')}}" alt="" class="menu-marquee__img">
                                         </div>
                                        </li>
                                        <li>
                                          <div class="menu-marquee__image">
                                            <img src="{{url('assets/images/menu_marquee/lola-ya-bonobo.webp')}}" alt="" class="menu-marquee__img">
                                         </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                                </div> --}}
                            </div>
                        </li>
                      </ul>
                    </div>
                  </li>

                  <!-- search bar============================== -->
                  <li class="menu__link">
                    <div class="menu-link__container">
                        <span ><i class="ri-search-line menu__link-icon"></i></span>  <!--======bar the research===== -->
                    </div>                    
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-deco"></div>
                      <ul class="dropdown-menu__links">
                        <li class="dropdown-menu__link">
                            <span class="dropdown-menu-link__title">
                              <form action="" method="get">
                                <div class="nav-type-of__search__container">
                              <select name="type-of-search" id="search-type" class="nav-type-of__search">
                                <option value="article" class="search-option-dropdown">Article</option>
                                <option value="brochure" class="search-option-dropdown">Brochure</option>
                                <option value="attraits" class="search-option-dropdown">Attraits</option>
                              </select>
                              </div>
                             <input type="text" class="search-box__text" id="search-box" name="seach_box" />
                             <div class="search-box-button__container">
                                <button class="search-box-button"><i class="ri-search-line"></i></button>
                            </div>
                            <div class="nav-search__option">
                              <div class="search-option__item search-option__item-1">
                                   <input type="date" name="" id="" class="nav-search-option-date">
                                   <select name="" id="" class="nav-search-option-type">
                                    <option value="">author 1</option>
                                    <option value="">author 1</option>
                                    <option value="">author 1</option>
                                   </select>
                              </div>

                              <div class="search-option__item search-option__item-2">
                                <input type="date" name="" id="" class="nav-search-option-data">
                                <select name="" id="" class="nav-search-option-type">
                                 <option value="">brochure type 1</option>
                                 <option value="">brochure type 2</option>
                                </select>
                           </div>

                           <div class="search-option__item search-option__item-3">
                            <select name="" id="" class="nav-search-option-type">
                             <option value="">city 1</option>
                             <option value="">city 2</option>
                             <option value="">city 3</option>
                            </select>
                           </div>

                            </div>
                            </form>
                            </span>
                            <div class="submenu-dopdown">
                                <div class="submenu-dropdown__group">
                                    <div class="submenu-dropdown__group-title">
                                            <span class="group-title">Search result</span>
                                    </div>
                                    <div class="group-container">
                                       <ul class="group-links">
                                        <li class="group-list">
                                            <a href="" class="group-link">result line</a>
                                        </li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                      </ul>
                    </div>
                </li>
                  <!-- end search bar ========================= -->
              </ul>
  
              <div class="menu-close">
                  <i class="ri-close-line"></i>
              </div>
            </div>

            <!-- <div class="search-nav">
              <div><i class="ri-search-line"></i></div>
            </div> -->
  
          </div>
       </div>

{{-- </x-app-layout> --}}