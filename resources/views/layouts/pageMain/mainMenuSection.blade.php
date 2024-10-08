<section class="main-menu section">
    <div class="container-menu container">
    @if (isset($infoess))
    @foreach ($infoess as $item)
    
        @if(isset($item->article) && (isset($item->article[0])))
        <div class="main-submenu passport">
            @foreach ($item->article as $sousItem)
                
                    
                        @if($sousItem->articlecatg_id == 1)
                        <div class="main-submenu-icon">
                            {{--check if view exist before to use it --}}
                            @include($sousItem->iconPath)
                           
                        </div>
                        <div class="main-menu__title">
                            <a href="{{route('misc.infoessentiel.infovisa',['cat' =>htmlentities(urlencode($item->name), ENT_QUOTES) ,  'catid'=>$sousItem->infoessentiel_id, 'id'=>$sousItem->id, 'title'=> htmlentities(urlencode($sousItem->title), ENT_QUOTES)])}}" class="main-menu__title-link">
                                {{$item->name}}
                            </a>
                        </div>
                        <div class="main-menu__links">
                            <ul class="main-menu-links-container">
                              @foreach ($item->article as $it)
                                  
                              @if(!($it->articlecatg_id == 1))

                                <li class="main-menu__list">
                                    <a href="{{route('misc.infoessentiel.infovisa',['cat' =>htmlentities(urlencode($item->name), ENT_QUOTES) ,  'catid'=>$sousItem->infoessentiel_id, 'id'=>$it->id, 'title'=>$it->title])}}" class="main-menu__link">
                                        {{$it->title}}
                                    </a>
                                </li>
                               {{--  <li class="main-menu__list">
                                    <a href="" class="main-menu__link">
                                        Se Rendre en R.D.Congo
                                    </a>
                                </li> --}}
                                @endif

                                @endforeach
                               
                            </ul>
                        </div>
                        @endif
                   
                        @break
       {{--  <div class="main-submenu premier-voyage">
                        <div class="main-submenu-icon">
                                <?xml version="1.0" encoding="utf-8"?>
                                <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 212.6 212.6" style="enable-background:new 0 0 212.6 212.6;" xml:space="preserve">
                                <style type="text/css">
                                .st0{fill:#1D71B8;}
                                </style>
                                <g>
                                <path class="st0" d="M100.07,21.59c-46.89,0-85.04,38.15-85.04,85.04c0,46.89,38.15,85.04,85.04,85.04s85.04-38.15,85.04-85.04
                                    C185.11,59.74,146.96,21.59,100.07,21.59z M100.07,188.53c-45.16,0-81.9-36.74-81.9-81.9c0-45.16,36.74-81.9,81.9-81.9
                                    c45.16,0,81.9,36.74,81.9,81.9C181.97,151.79,145.23,188.53,100.07,188.53z"/>
                                <rect x="93.63" y="84.95" class="st0" width="13.02" height="71.63"/>
                                <path class="st0" d="M100.14,56.68c-4.88,0-8.14,3.7-8.14,8.14s3.11,7.99,7.84,7.99c5.18,0,8.29-3.55,8.29-7.99
                                    C108.14,60.23,104.88,56.68,100.14,56.68z"/>
                                </g>
                                </svg>
                        </div>
                        <div class="main-menu__title">
                            <a href="" class="main-menu__title-link">
                                Pour un Premier séjour
                            </a>
                        </div>
                       <div class="main-menu__links">
                            <ul class="main-menu-links-container">
                                <li class="main-menu__list">
                                    <a href="" class="main-menu__link">
                                        Wifi et Connectivité
                                    </a>
                                </li>
                                <li class="main-menu__list">
                                    <a href="" class="main-menu__link">
                                        Se 
                                    </a>
                                </li>
                            </ul>
                        </div>
        </div>
        <div class="main-submenu wheretostay">
            <div class="main-submenu-icon">
                    <?xml version="1.0" encoding="utf-8"?>
                    <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 212.6 212.6" style="enable-background:new 0 0 212.6 212.6;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill:#1D71B8;}
                    </style>
                    <path class="st0" d="M162.26,115.83c0-3.84,0.04-7.69,0.02-11.53c-0.01-2.09-1-3.61-2.91-4.5c-0.85-0.4-1.7-0.78-2.57-1.14
                        c-0.48-0.19-0.67-0.45-0.67-1c0.02-8.28,0.02-16.55,0.01-24.83c0-3.7-2.74-6.43-6.46-6.44c-1.42,0-2.84,0-4.26,0
                        c-11.18,0-22.36,0-33.54,0c-15.24,0-30.49,0-45.73,0c-1.05,0-2.09-0.02-3.14,0c-2.91,0.06-5.51,2.34-5.95,5.22
                        c-0.07,0.47-0.11,0.95-0.11,1.43c-0.01,7.97,0,15.94,0,23.91c0,0.35,0.08,0.69-0.41,0.89c-1.52,0.61-3.01,1.27-4.5,1.94
                        c-1.87,0.84-2.91,2.31-2.92,4.35c-0.04,7.49-0.04,14.98-0.01,22.47c0.01,2.63,2.12,4.64,4.75,4.67c1.57,0.02,3.14,0,4.72,0.01
                        c0.19,0,0.38,0.02,0.62,0.04c0,0.31,0,0.57,0,0.83c0,3.95,0,7.91,0,11.86c0,1.49,0.63,2.38,1.86,2.73c1.63,0.47,3.58-0.45,3.55-2.66
                        c-0.05-3.97-0.02-7.95-0.02-11.92c0-0.28,0-0.56,0-0.85c27.43,0,54.76,0,82.17,0c0,0.31,0,0.57,0,0.82c0,3.93-0.01,7.86,0.02,11.79
                        c0,0.57,0.1,1.2,0.36,1.69c0.59,1.1,1.92,1.5,3.26,1.11c1.1-0.32,1.76-1.28,1.76-2.62c0.01-4,0-7.99,0-11.99c0-0.25,0-0.51,0-0.8
                        c0.3-0.01,0.51-0.03,0.72-0.03c1.49,0,2.97,0,4.46,0c2.86-0.01,4.92-2.05,4.92-4.9C162.29,122.86,162.26,119.35,162.26,115.83z
                        M61.45,70.03c2.87,0,5.73,0,8.6,0c15.82,0,31.63,0,47.45,0c11.36,0,22.72,0,34.08,0c1.18,0,1.46,0.29,1.46,1.52
                        c0,8.19,0,16.38,0,24.57c0,0.24,0,0.47,0,0.82c-1.54-0.53-2.97-1.01-4.39-1.54c-0.16-0.06-0.28-0.45-0.28-0.68
                        c-0.02-3.02-0.01-6.03-0.01-9.05c0-1.63,0-3.26,0-4.89c-0.01-3.57-2.36-6.06-5.78-6.07c-4.18-0.02-8.36-0.01-12.53-0.01
                        c-5,0-10.01,0.01-15.01,0c-2.34-0.01-4.18,0.94-5.24,3.14c-0.42,0.86-0.6,1.92-0.64,2.89c-0.09,2.34-0.03,4.69-0.03,7.04
                        c0,0.28,0,0.57,0,0.9c-1.71,0-3.37,0-5.13,0c0-0.25,0-0.5,0-0.75c0-2.42,0-4.84,0-7.26c0-3.39-2.28-5.89-5.54-5.93
                        c-4.2-0.05-8.4,0.02-12.6,0.02c-3.92,0-7.85-0.03-11.77-0.04c-1.38,0-2.76-0.05-4.13,0.04c-2.98,0.21-5.17,2.68-5.18,5.81
                        c-0.02,4.5,0,9,0,13.51c0,0.19,0,0.38,0,0.63c-1.53,0.5-3.05,1-4.64,1.53c-0.02-0.26-0.05-0.46-0.05-0.66c0-8.02,0-16.04,0-24.07
                        C60.07,70.35,60.38,70.03,61.45,70.03z M145.01,78.25c0,5.45,0,10.83,0,16.32c-10.59-3.12-21.27-5.07-32.18-5.8
                        c0-3.52,0-6.98,0-10.52C123.56,78.25,134.26,78.25,145.01,78.25z M100.31,78.32c0,3.44,0,6.82,0,10.34
                        c-10.83,0.64-21.54,2.31-32.18,5.3c0-5.3,0-10.42,0-15.64C78.86,78.32,89.56,78.32,100.31,78.32z M159.32,127.52
                        c0,0.1-0.02,0.19-0.05,0.39c-35.74,0-71.42,0-107.17,0c-0.01-0.31-0.03-0.57-0.03-0.84c0-7.61,0-15.22-0.01-22.83
                        c0-0.53,0.14-0.8,0.59-1.01c5.35-2.6,10.86-4.67,16.51-6.36c5.69-1.7,11.45-2.98,17.3-3.83c8.06-1.17,16.15-1.7,24.28-1.25
                        c3.81,0.21,7.62,0.45,11.41,0.92c8.91,1.09,17.67,3.09,26.17,6.23c3.54,1.3,6.99,2.89,10.48,4.34c0.37,0.15,0.54,0.36,0.54,0.82
                        C159.32,111.9,159.32,119.71,159.32,127.52z"/>
                    </svg>
              </div>
            <div class="main-menu__title">
                <a href="" class="main-menu__title-link">
                    Où Séjourner en R.D.C
                </a>
            </div>
            <div class="main-menu__links">
                <ul class="main-menu-links-container">
                    <li class="main-menu__list">
                        <a href="" class="main-menu__link">
                            Ambassade
                        </a>
                    </li>
                    <li class="main-menu__list">
                        <a href="" class="main-menu__link">
                            Se Rendre en R.D.Congo
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-submenu aeport">
            <div class="main-submenu-icon">
                        <?xml version="1.0" encoding="utf-8"?>
                        <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 212.6 212.6" style="enable-background:new 0 0 212.6 212.6;" xml:space="preserve">
                        <style type="text/css">
                        .st0{fill:#1D71B8;}
                        </style>
                        <path class="st0" d="M190.62,114.1c-8.14-4.73-16.16-9.66-24.29-14.4c-1.36-0.79-1.87-1.62-1.78-3.14c0.14-2.31,0.16-4.63,0.07-6.94
                        c-0.1-2.57-1.58-4.29-4.05-4.5c-2.47-0.21-4.98-0.21-7.46-0.09c-1.58,0.08-2.85,0.94-3.56,2.46c-0.25,0.53-0.49,1.07-0.83,1.8
                        c-1.35-0.79-2.52-1.58-3.78-2.2c-1.11-0.54-1.53-1.27-1.49-2.52c0.08-2.4-0.03-4.8-0.03-7.2c0-2.75-1.47-4.57-4.15-4.85
                        c-2.12-0.22-4.26-0.28-6.39-0.32c-2.31-0.04-3.85,1.15-4.7,3.26c-0.18,0.44-0.32,0.9-0.49,1.39c-1.77-0.56-2.26-1.57-2.24-3.25
                        c0.06-7.3,0-14.59-0.1-21.89c-0.09-7.1-1.46-13.96-4.42-20.45c-1.29-2.83-2.71-5.6-4.99-7.82c-2.49-2.41-4.9-2.46-7.52-0.21
                        c-2.85,2.45-4.5,5.7-6,9.03c-3.04,6.76-4.23,13.91-4.41,21.28c-0.18,7.2-0.43,14.4-0.65,21.77c-1.01,0.53-2.05,1.08-3.17,1.66
                        c-0.92-4.39-2.05-5.31-6.26-5.38c-1.69-0.03-3.39-0.12-5.07-0.02c-2.63,0.15-4.27,1.79-4.49,4.39c-0.08,0.97-0.05,1.96-0.06,2.94
                        c-0.03,2.3-0.05,4.59-0.08,6.83c-1.94,1.01-3.65,1.91-5.4,2.82c-1.22-3.88-2.3-4.68-6.22-4.75c-1.25-0.02-2.49-0.04-3.74-0.05
                        c-4.23-0.02-5.84,1.53-5.91,5.7c-0.05,2.65-0.07,5.31-0.1,7.88c-0.99,0.56-1.75,1-2.53,1.43c-8.07,4.48-16.14,8.97-24.21,13.45
                        c-0.76,0.42-1.73,0.65-1.74,1.78c-0.03,2.54-0.03,5.09-0.04,7.77c1.61-0.24,2.94-0.4,4.24-0.65c17.9-3.43,35.79-6.96,53.72-10.26
                        c3.88-0.71,7.91-0.64,11.89-0.93c1.02,14.7,2.02,29.04,3.01,43.36c-9.21,4.75-18.27,9.43-26.81,13.84
                        c-0.14,4.13-0.25,7.64-0.37,11.29c9.87-2.19,19.82-4.41,29.88-6.64c1.48,6.89,3.27,13.41,6.23,19.89c3.33-6.45,4.99-13.06,6.79-19.7
                        c10.13,2.52,20,4.98,29.78,7.42c0.04-3.85,0.07-7.39,0.1-11.13c-8.81-4.83-17.83-9.78-26.86-14.74c1.36-14.36,2.71-28.59,4.07-42.98
                        c3.09,0.14,6.11,0.21,9.12,0.43c1.32,0.1,2.62,0.46,3.92,0.76c7.54,1.73,15.07,3.5,22.61,5.2c9.72,2.19,19.44,4.32,29.17,6.46
                        c1.25,0.28,2.53,0.44,3.96,0.68c0.01-2.24-0.1-4.12,0.07-5.97C193.03,116.17,192.32,115.09,190.62,114.1z M81.16,76.55
                        c0.08-1.73,0.51-2.13,2.33-2.18c1.77-0.05,3.55,0.03,5.33,0.07c1.2,0.02,2.11,0.5,2.25,1.79c0.13,1.23,0.26,2.45-1.2,3.19
                        c-2.84,1.44-5.62,2.99-8.9,4.75C81.04,81.33,81.04,78.93,81.16,76.55z M59.81,88.74c0.1-1.49,0.66-2.06,2.15-2.14
                        c1.5-0.08,3.02-0.01,4.52,0.01c3.15,0.05,3.42,0.37,3.07,3.81c-3.09,1.69-6.27,3.43-10.04,5.49C59.62,93.15,59.66,90.94,59.81,88.74
                        z M69.76,111.17c-11.7,2.22-23.39,4.48-35.08,6.72c-1.12,0.21-2.25,0.38-3.45,0.58c-0.03-0.7-0.02-1.23-0.09-1.75
                        c-0.18-1.44,0.48-2.2,1.75-2.89c9.12-4.97,18.17-10.05,27.27-15.04c12.06-6.61,24.16-13.16,36.24-19.74
                        c0.23-0.12,0.48-0.21,1.07-0.48c0.23,9.63,0.45,19.09,0.68,28.73C88.31,106.93,79.08,109.4,69.76,111.17z M76.48,175
                        c0.1-2.01,0.18-3.85,0.28-5.92c8.08-4.17,16.33-8.42,24.89-12.83c0.6,4.31,1.16,8.38,1.77,12.73
                        C94.38,170.99,85.51,172.98,76.48,175z M144.27,170.07c-0.12,1.83-0.24,3.67-0.38,5.72c-8.67-2.17-17.5-4.38-26.52-6.64
                        c0.69-4.24,1.35-8.33,2.06-12.68C127.83,161.07,135.98,165.53,144.27,170.07z M122.4,81.59c-0.05,4.97-0.09,9.95-0.47,14.9
                        c-1.15,15.08-2.31,30.16-3.76,45.21c-0.8,8.4-2.12,16.76-3.29,25.13c-0.81,5.83-2.49,11.45-4.64,16.99
                        c-1.93-5.14-3.25-10.36-4.12-15.72c-2.27-14.08-3.06-28.3-4.11-42.49c-0.45-6.02-1.1-12.05-1.17-18.08
                        c-0.21-19.21-1.16-38.43,0.17-57.64c0.55-7.94,2.65-15.4,7.06-22.11c0.58-0.88,1.3-1.7,2.08-2.4c1.48-1.32,2.55-1.31,3.9,0.18
                        c1.01,1.11,1.9,2.36,2.65,3.66c3.85,6.7,5.68,14.01,5.77,21.68C122.61,61.12,122.49,71.36,122.4,81.59z M151.9,89.31
                        c0.21-0.99,0.91-1.52,1.9-1.52c2.03-0.01,4.06,0.01,6.09,0.07c1.27,0.04,1.94,0.75,1.93,2.03c-0.01,2.2-0.04,4.4-0.06,7.06
                        c-3.24-1.89-6.03-3.55-8.86-5.16C151.87,91.2,151.69,90.33,151.9,89.31z M132.34,75.1c1.94-0.16,3.9-0.29,5.85-0.2
                        c1.92,0.09,2.66,0.98,2.72,2.92c0.07,2.12,0.05,4.25,0.08,7c-3.8-2.25-6.97-4.13-10.3-6.09c-0.03-0.46-0.08-1.07-0.1-1.68
                        C130.55,75.85,131.26,75.19,132.34,75.1z M189.83,120.61c-0.81-0.13-1.66-0.21-2.49-0.39c-15.44-3.48-30.89-6.91-46.31-10.49
                        c-4.62-1.07-9.23-1.88-13.97-1.88c-0.88,0-1.76-0.1-2.98-0.17c0.39-9.51,0.78-18.94,1.18-28.71c1.15,0.51,1.99,0.78,2.73,1.22
                        c11.84,7.02,23.68,14.05,35.51,21.09c8.01,4.77,15.95,9.67,24.06,14.26C189.77,116.78,190.45,118.14,189.83,120.61z"/>
                        </svg>
            </div>
            <div class="main-menu__title">
                <a href="" class="main-menu__title-link">
                    Conseil Pour Se rendre à l'aeroprt
                </a>
            </div>
          {{--   <div class="main-menu__links">
                <ul class="main-menu-links-container">
                    <li class="main-menu__list">
                        <a href="" class="main-menu__link">
                            Ambassade
                        </a>
                    </li>
                    <li class="main-menu__list">
                        <a href="" class="main-menu__link">
                            Se Rendre en R.D.Congo
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-submenu moving-around">
            <div class="main-submenu-icon">
                                <?xml version="1.0" encoding="utf-8"?>
                    <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 212.6 212.6" style="enable-background:new 0 0 212.6 212.6;" xml:space="preserve">
                    <style type="text/css">
                    .st0{fill:#1D71B8;}
                    </style>
                    <g>
                    <path class="st0" d="M119.11,95.96c3.9,0.13,7.79,0.33,12.18,0.52c1.59,0,3.67-0.02,5.74,0.01c1.61,0.02,2.97-0.57,3.64-2.02
                        c2.65-5.75,5.61-11.44,5.62-17.99c0.01-3.28-0.26-6.58-0.59-9.84c-0.71-7-2.76-13.59-6.14-19.78c-3.22-5.9-9.07-7.98-15.99-5.82
                        c-3.53,1.1-5.41,4.04-7.15,6.96c-3.37,5.65-4.58,11.96-5.71,18.38c-1.6,9.12-0.18,17.68,3.36,26.07
                        C115.04,94.76,116.64,95.88,119.11,95.96z M113.98,68.7c0.92-4.75,1.2-9.64,3.2-14.11c1.24-2.77,2.71-5.46,4.3-8.05
                        c2.9-4.74,11.28-4.26,14.11,0.32c3,4.86,4.94,10.1,5.93,15.63c0.74,4.12,0.79,8.37,1.05,12.56c0.25,4.01-0.34,7.87-2.14,11.54
                        c-1.06,2.16-1.79,4.47-2.74,6.89c-6.58-0.25-13.06-0.49-19.82-0.74C114.52,84.84,112.35,77.15,113.98,68.7z"/>
                    <path class="st0" d="M84.93,83.5c-1.25-1.08-2.8-2.23-4.35-2.47c-6.08-0.92-11.63-0.16-15.23,7.08c-3.07,6.18-4.76,12.68-5.9,19.47
                        c-1.59,9.49,0.59,18.13,4.74,26.5c0.93,1.87,2.47,2.95,4.71,2.88c2.07-0.07,4.15-0.01,6.26-0.01c4-0.24,8.01-0.51,12.03-0.71
                        c1.47-0.07,2.69-0.6,3.3-1.92c2.17-4.77,4.23-9.65,4.66-14.91c0.6-7.35-0.27-14.64-2.3-21.72C91.32,92.37,89.27,87.23,84.93,83.5z
                        M87.31,133.19c-6.49,0.29-12.86,0.58-19.47,0.87c-2.6-5.47-5.03-10.86-5.15-17.08c-0.17-8.29,0.91-16.32,4.13-23.99
                        c0.84-1.99,1.96-3.87,2.99-5.78c2.41-4.48,10.81-4.95,13.93-0.65c3.06,4.22,5.25,8.84,6.2,13.89c0.96,5.13,1.61,10.35,1.9,15.55
                        C92.14,121.29,90.16,127.82,87.31,133.19z"/>
                    <path class="st0" d="M90.58,143.42c-0.75-0.05-1.6-0.18-2.45-0.16c-7.2,0.19-14.39,0.41-21.18,0.62c-2.2,1.03-3.08,2.28-3.23,3.76
                        c-0.52,5.11-0.61,10.24,1.06,15.18c1.89,5.59,5.96,8.83,11.64,9.97c1.77,0.36,3.66,0.28,5.48,0.16c5.67-0.35,9.59-3.25,11.71-8.49
                        c1.96-4.83,1.92-9.83,0.42-14.7C93.37,147.55,93.12,144.87,90.58,143.42z M91.69,161.23c-0.98,6.41-6.16,9.67-13.4,8.98
                        c-5.88-0.57-10.75-4.7-11.44-10.48c-0.49-4.13-0.1-8.36-0.1-12.77c7.75-0.34,15.32-0.67,22.9-0.99
                        C92.35,150.92,92.48,156.1,91.69,161.23z"/>
                    <path class="st0" d="M137.25,103.52c-6.59-0.28-13.19-0.51-19.78-0.71c-1.08-0.03-2.16,0.14-3,0.2c-0.51,0.47-0.88,0.67-1.03,0.97
                        c-3.51,6.73-4.33,13.68-1.43,20.81c1.39,3.43,3.89,6.01,7.56,6.9c2.45,0.59,5.06,0.89,7.57,0.77c6.14-0.31,10.69-3.35,13.04-9.1
                        c2.08-5.1,2.08-10.52,1.52-15.9C141.42,104.81,139.91,103.64,137.25,103.52z M137.85,121.27c-2.73,8.95-13.84,10.37-19.85,6.63
                        c-2.61-1.62-3.81-4.28-4.27-7.12c-0.84-5.15-0.51-10.23,2.05-15.26c7.52,0.35,15.05,0.7,22.92,1.07
                        C138.69,111.67,139.3,116.5,137.85,121.27z"/>
                    </g>
                    </svg>
            </div>
            <div class="main-menu__title">
                <a href="" class="main-menu__title-link">
                    Se deplacer au Congo
                </a>
            </div>
            <div class="main-menu__links">
                <ul class="main-menu-links-container">
                    <li class="main-menu__list">
                        <a href="" class="main-menu__link">
                            Ambassade
                        </a>
                    </li>
                    <li class="main-menu__list">
                        <a href="" class="main-menu__link">
                            Se Rendre en R.D.Congo
                        </a>
                    </li>
                </ul>
            </div> 
        </div>
        <div class="main-submenu download-flyer">
            <div class="main-submenu-icon">
                            <?xml version="1.0" encoding="utf-8"?>
                            <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 297.64 212.6" style="enable-background:new 0 0 297.64 212.6;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:#1D71B8;}
                            </style>
                            <g>
                                <path class="st0" d="M261.63,146.02c-6.54-13.02-13.03-26.07-19.54-39.1c-1.3-2.6-2.65-5.17-4.31-8.41
                                c-2.97,5.77,0.18,5.93,0.18,5.93l22.33,45.29l-55.3,27.89c0,0-8.66-48.49-11.22-63.21c-0.84-4.85,0.6-9.81,4.03-14.97
                                c0.13-0.2-0.15-0.73-0.32-1.07c-2.19-4.3-4.39-8.59-7.03-13.74c-2.55,5.8-5.26,3.16-8.1,1.26c-12.64-8.47-25.38-16.79-37.93-25.4
                                c-2.78-1.91-4.58-1.79-7.34,0.1c-13.07,8.97-26.37,17.61-39.5,26.5c-2.08,1.41-3.34,1.5-5.13-0.41
                                c-4.12-4.38-8.48-8.53-12.72-12.79c-5.11-5.13-10.21-10.28-15.71-15.82c-15.56,31.11-30.84,61.68-46.18,92.35
                                c0.66,0.46,1.03,0.8,1.46,1.02c19.31,9.67,38.61,19.38,58,28.9c1.28,0.63,3.49,0.35,4.86-0.33c18.35-9.03,36.65-18.15,54.89-27.4
                                c2.66-1.35,4.71-1.46,7.43-0.07c18.11,9.22,36.35,18.18,54.47,27.38c2.45,1.24,4.31,1.17,6.72-0.05
                                c16.75-8.51,33.56-16.9,50.38-25.27c2.48-1.23,5.1-2.17,7.65-3.24c0-0.77,0-1.54,0-2.3C263.02,148.04,262.18,147.11,261.63,146.02z
                                M76.93,177.19c0,0-39.95-20.64-54.82-28.07c12.44-24.88,42.34-85.96,42.34-85.96l28.03,27.06L76.93,177.19z M79.59,178.67
                                L94.9,91.38l44.78-29.09l0.51,85.95L79.59,178.67z M142.92,149.14l-0.72-87.32l45.91,30.66l14.8,86.13L142.92,149.14z"/>
                                <path class="st0" d="M212.21,114.59c1.68,3.28,3.37,6.56,5.21,10.11c0.43-0.6,0.67-0.87,0.83-1.17
                                c8.47-16.6,17.05-33.15,25.35-49.84c6.88-13.83,1.07-30.01-12.93-38.02c-2.54-1.26-0.94-1.09-7.97-3.05
                                c-8-0.63-11.18,0.45-11.62,0.57c-19.24,5.21-27.84,24.59-18.78,42.31C198.95,88.53,205.57,101.57,212.21,114.59z M217.31,37.31
                                c13.08-0.14,24.22,10.85,24.29,23.97c0.07,13.1-10.96,24.18-24.07,24.19c-12.93,0.01-23.93-10.83-24.12-23.77
                                C193.22,48.64,204.18,37.45,217.31,37.31z"/>
                                <path class="st0" d="M106.91,134.7l-2.19,0.84l-0.63,2.94c-0.16,0.74-0.31,1.45-0.43,2.23l-0.05,0.02
                                c-0.6-0.48-1.16-0.89-1.83-1.34l-2.49-1.77l-2.24,0.86l5.83,3.98l-1.76,7.15l2.22-0.85l0.64-3.1c0.18-0.83,0.32-1.56,0.43-2.37
                                l0.05-0.02c0.64,0.51,1.25,0.99,1.93,1.46l2.6,1.86l2.26-0.87l-6.06-4.23L106.91,134.7z"/>
                                <path class="st0" d="M124.45,122.43l-0.91,0.35l-0.26,1.22c-0.07,0.31-0.13,0.6-0.18,0.93l-0.02,0.01
                                c-0.25-0.2-0.48-0.37-0.76-0.56l-1.03-0.73l-0.93,0.36l2.42,1.65l-0.73,2.97l0.92-0.35l0.27-1.29c0.07-0.34,0.13-0.65,0.18-0.98
                                l0.02-0.01c0.27,0.21,0.52,0.41,0.8,0.61l1.08,0.77l0.94-0.36l-2.51-1.75L124.45,122.43z"/>
                                <path class="st0" d="M104.59,107.31l0.92-0.35l0.27-1.29c0.07-0.34,0.13-0.65,0.18-0.98l0.02-0.01c0.27,0.21,0.52,0.41,0.8,0.61
                                l1.08,0.77l0.94-0.36l-2.51-1.75l0.71-2.82l-0.91,0.35l-0.26,1.22c-0.07,0.31-0.13,0.6-0.18,0.93l-0.02,0.01
                                c-0.25-0.2-0.48-0.37-0.76-0.56l-1.03-0.73l-0.93,0.36l2.42,1.65L104.59,107.31z"/>
                            </g>
                            </svg>
                </div>
            <div class="main-menu__title">
                <a href="" class="main-menu__title-link">
                    Information Relative au visa
                </a>
            </div>
            <div class="main-menu__links">
                <ul class="main-menu-links-container">
                    <li class="main-menu__list">
                        <a href="" class="main-menu__link">
                            Ambassade
                        </a>
                    </li>
                    <li class="main-menu__list">
                        <a href="" class="main-menu__link">
                            Se Rendre en R.D.Congo
                        </a>
                    </li>
                </ul>
            </div>
        </div> 
        --}}

    @endforeach 
    </div>
    @endif
   
    @endforeach
    
    @endif
    </div>
  </section>