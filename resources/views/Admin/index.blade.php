<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!--==================================REMIXICONS=======================================-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
      <!--=========================================================================-->
  
  
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{url('assets/css/stylea.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/formstyle.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/article_add_content.css')}}">
     <!--================================css style=========================================-->

    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="{{url('assets/js/article_add_content.js')}}"></script>


    <!-- google chart code  -->
    <script type="text/javascript">
        google.charts.load('current', {
          'packages':['geochart'],
        });
        google.charts.setOnLoadCallback(
                function() { // Anonymous function that calls drawChart1 and drawChart2
                    drawRegionsMap();
      });
  
        function drawRegionsMap() {
          var data = google.visualization.arrayToDataTable([
            ['Country', 'Popularity'],
            ['Germany', 200],
            ['United States', 300],
            ['Brazil', 400],
            ['Canada', 500],
            ['France', 600],
            ['RU', 700]
          ]);
  
          var options = {
            backgroundColor: '#f0efef',
            defaultColor: '#000',

          };
  
          var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
  
          chart.draw(data, options);
        }
      </script>
  
    <!-- google chart code -->

</head>
<body class="body">
    <header class="header">
        <div class="header-container container">
            <div class="logo">
                <a href="{{url('/adminDashboard')}}"> <img src="{{url('assets/images/logo-paysage.png')}}" alt="logo" class="logo-img"> </a>
            </div>
            <div class="user-auth"> 
             
              @auth
         <div class="header-amin__detail-name"><i class="ri-admin-fill"></i><span>{{ Auth::user()->name }}</span></div>
         <form method="POST" action="{{route('admin.logout')}}">
            @csrf
                <button>{{ __('Log Out') }}</button>
        </form>
        @endauth</div>
        </div>
    </header>
    <main class="main">
        <div class="main-container container">
            <div class="header-header">
              <div class="header-header__time">
                <div class="header-header__spec header-header__timely">date</div>
                  <div class="header-header__daily header-header__timely">Today</div>
                  <div class="header-header__mounthly header-header__timely">Mounth</div>
                  <div class="header-header__yearly header-header__timely">Year</div>
                  <div class="header-header__total header-header__timely">Total</div>
              </div>
               <div class="header-header__container">
                    <div class="header-block">
                        <div class="header-block_content">
                            <span>4 viewers</span>
                        </div>
                    </div>
                    <div class="header-block">
                        <div class="header-block_content">
                            <span>4 viewers</span>
                        </div>
                    </div>
                    <div class="header-block">
                        <div class="header-block_content">
                            <span>4 viewers</span>
                        </div>
                    </div>
               </div>
            </div>
            <div class="side-side">
                <div class="side-side__toggle">
                  <i class="ri-menu-fill"></i>
                </div>

             <div class="side-side__container">
                <div class="side-side__close">
                    <i class="ri-close-fill"></i>
                </div>
                <div class="side-menu__top">
                    <div class="side-title"><span><a href="{{route('admin.dashboard')}}">Dashboard</a></span></div>
                    <div class="side-toggle"><i class="ri-menu-fill"></i></div>
                </div>
                  <div class="side-menu">
                    <div class="side-menu__menu">
                       <ul class="side-menu__lists">
                           <li class="side-menu__icon"><i class="ri-article-fill"></i></li>
                           <li class="side-menu__list"><a href="{{route('index.page')}}">Index</a></li>
                       </ul>
                    </div>
                    <div class="side-menu__menu">
                        <ul class="side-menu__lists">
                            <li class="side-menu__icon"><i class="ri-book-2-line"></i></li>
                            <li class="side-menu__list"><a href="{{route('province.index')}}">Province</a></li>
                        </ul>
                    </div>
                    <div class="side-menu__menu">
                        <ul class="side-menu__lists">
                            <li class="side-menu__icon"><i class="ri-question-answer-fill"></i></li>
                            <li class="side-menu__list"><a href="{{route('deuxniveau.index')}}">1er niveau decoupage admin</a></li>
                        </ul>
                    </div>

                    <div class="side-menu__menu">
                      <ul class="side-menu__lists">
                          <li class="side-menu__icon"><i class="ri-question-answer-fill"></i></li>
                          <li class="side-menu__list">2er niveau decoupage admin Ville</li>
                      </ul>
                  </div>

                  <div class="side-menu__menu">
                    <ul class="side-menu__lists">
                        <li class="side-menu__icon"><i class="ri-question-answer-fill"></i></li>
                        <li class="side-menu__list">3er niveau decoupage admin Territoire</li>
                    </ul>
                </div>

                <div class="side-menu__menu">
                    <ul class="side-menu__lists">
                        <li class="side-menu__icon"><i class="ri-question-answer-fill"></i></li>
                        <li class="side-menu__list"><a href="{{route('decoupage-Administratif.index')}}">Decoupage Admin</a></li>
                    </ul>
                </div>
                
                <div class="side-menu__menu">
                    <ul class="side-menu__lists">
                        <li class="side-menu__icon"><i class="ri-layout-grid-2-fill"></i></li>
                        <li class="side-menu__list"><a href="{{route('miscArticle.index')}}">Miscellaneous Articles</a></li>
                    </ul>
                </div>
                
                <div class="side-menu__menu">
                    <ul class="side-menu__lists">
                        <li class="side-menu__icon"><i class="ri-question-answer-fill"></i></li>
                        <li class="side-menu__list"><a href="">Essentiels</a></li>
                    </ul>
                </div>
                
                <div class="side-menu__menu">
                    <ul class="side-menu__lists">
                        <li class="side-menu__icon"><i class="ri-question-answer-fill"></i></li>
                        <li class="side-menu__list"><a href="{{route('parametre.parametre')}}">Parametres</a></li>
                    </ul>
                </div>

                  </div>
             </div>
            </div>
            <div class="main-main">
              @yield('sectionC')
              
            </div> 
        </div>
    </main>
    <footer class="footer">
        <div class="footer-container container">
            <span>all right reserved ONT</span>
        </div>
    </footer>

    <script src="{{url('assets/js/indexa.js')}}"></script>
</body>
</html>