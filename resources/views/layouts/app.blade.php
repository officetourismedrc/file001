<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
            <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
            <link rel="stylesheet" href="{{url('assets/css/swiper-bundle.min.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/office.css')}}">
             <link rel="stylesheet" href="{{url('assets/css/ont_article.css')}}">

            <link rel="stylesheet" href="{{url('assets/css/Misc/InfoEssentiel/InfoVisa/infoVisa.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/article_province.css')}}">
            {{-- <link rel="stylesheet" href="{{url('assets/css/stylelink.css')}}"> --}}
            {{-- <link rel="shortcut icon" href="{{url('assets/images/logo-paysage.png')}}" /> --}}
            {{-- <link rel="shortcut icon" href="{{url('assets/images/bijoux-01.png')}}" /> --}}
            
           
            
             <!-- Fonts -->
            
             <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" /> 
             
              <meta property="og:type" content="website" />
              <meta property="og:title" content="The perfect guyde about everything you need to know on the wonderful DR.congo destination" />
               <meta property="og:url" content="https://officetourisme-rdc.com/" />
             <meta property="og:site_name" content="RD.C tourisme" />
             
             <meta property="og:description" content="Found all informations and contact links about how to travel to dr.congo for a wonderful journey" />
            
            
             <meta property="og:image" content="{{url('assets/images/logo_ont_paysage.svg')}}" />
             <meta property="og:image:secure_url" content="{{url('assets/images/logo_ont_paysage.svg')}}" />
             <meta property="og:image:width" content="1280" />
             <meta property="og:image:height" content="640" />
             <meta property="twitter:card" content="summary_large_image" />
             <meta property="twitter:image" content="{{url('assets/images/logo_ont_paysage.svg')}}" />
             <meta property="twitter:site" content="@OfficeRdcongo" />

            
            <title>RD.C tourisme</title>
   
    </head>
    <body>
        <header class='header'>
             @include('layouts.headerPage.pageNavigation')
             @yield('slider')
        </header>
        <main class="main">
         @yield('content')
        </main>
        <footer class="footer">
         @include('layouts.footer.footer')
        </footer>

        {{-- java script --}}

         <!--==========================scripts==============================-->
    <!--start script for currency conversion-->
     <script src="{{url('assets/js/currency.js')}}"></script>
     <!--end curency converter-->
     <script src="{{url('assets/js/swiper-bundle.min.js')}}"></script>
     <script src="{{url('assets/js/office.js')}}"></script>
     <script src="{{url('assets/js/script.js')}}"></script>
     <script src="{{url('assets/js/ont_article.js')}}"></script>
        {{-- js --}}
    </body>
</html>

