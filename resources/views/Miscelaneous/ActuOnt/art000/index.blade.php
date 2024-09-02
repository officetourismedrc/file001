@extends('layouts.app')
@section('slider')
@include('Miscelaneous.ActuOnt.art001.slider')
@endsection
@section ('content')
<section class="section_ontarticles section">
<div class="ont_container container grid">
    <div class="content">
        <div class="main-block">
            <div class="top_actu">
                <div class="top-actu__title">
                    <h2 class="section__title-2">Trending articles...</h2>
                </div>
                <div class="top-actu__content">
                   <span class="top-actu__item"><a href="" class="top-actu__link">Kinshasa</a></span>
                   <span class="top-actu__item"><a href="" class="top-actu__link">Kinshasa</a></span>
                   <span class="top-actu__item"><a href="" class="top-actu__link">Kinshasa</a></span>
                   <span class="top-actu__item"><a href="" class="top-actu__link">Kinshasa</a></span>
                </div>
            </div>

            <div class="page__main">
                <article class="page-main__left">
                   <main class="page-left__main">
                       <div class="article-title__block">
                            <h1 class="article_main__title">{{$article['article']->title}}</h1>
                            <h2 class="article_second__title"></h2>
                       </div>
                       <div class="article-actuel__content">
                             <div class="article__meta-data">
                                <i class="ri-user-fill"></i>
                               <span class="article_publishing__date">{{$article['article']->publish_date}}</span>
                               <span class="article_author">{{$article['article']->author_name}}</span>
                             </div>
                             <div class="article__text-container">
                                <div class="article-top__image">
                                    <img src="{{url('assets/images/Misc/ActuOnt/actu001/éléphants_virunga_sauvons.jpg')}}" alt="">
                                    @foreach ($article['article']['images'] as $item)
                                          
                                        @if ($item->image_category === 'title' )  
                                            <img src="{{url('assets/images/Misc/ActuOnt/actu001/éléphants_virunga_sauvons.jpg')}}" alt="">
                                        @endif
                                    @endforeach
                                    
                                </div>
                                <div class="article__text">
                                   <div class="article__text-share">
                                     <div class="article__text-share-title">
                                        <span>share</span>
                                     </div>
                                     <div class="article__text-share-icon-container">
                                        <span class="article__text-share-icon"><a href="#"><i class="ri-facebook-fill"></i></a></span>
                                        <span class="article__text-share-icon"><a href=""><i class="ri-instagram-line"></i></a></span>
                                        <span class="article__text-share-icon"><a href=""><i class="ri-linkedin-box-line"></i></a></span>
                                        <span class="article__text-share-icon"><a href=""><i class="ri-twitter-line"></i></a></span>
                                        <span class="article__text-share-icon"><a href=""><i class="ri-whatsapp-fill"></i></a></span>
                                        <span class="article__text-share-icon"><a href=""><i class="ri-messenger-fill"></i></a></span>
                                        <span class="article__text-share-icon"><a href=""><i class="ri-mail-fill"></i></a></span>
                                     </div>
                                   </div>
                                   <div class="article__text-text">
                                    <p> article content </p>
                                   </div>
                                </div>
                            </div>
                       </div>
                   </main>
                   <footer class="page-main__footer">
                      <div class="page-main__footer-title">
                        <span>partager cette article</span>
                      </div>
                      <div class="footer__cote">
                                <div class="page-main__footer-icon">
                                    <a class="page-main__footer-icon__link" href="#"><i class="ri-facebook-fill"></i></a>
                                    <a class="page-main__footer-icon__link" href="#"> <i class="ri-twitter-fill"></i></a>
                                    <a class="page-main__footer-icon__link" href="#"> <i class="ri-instagram-fill"></i></a>
                                    <a class="page-main__footer-icon__link" href="#"> <i class="ri-linkedin-fill"></i></a>
                                    {{-- <a class="page-main__footer-icon__link" href="#"><i class="ri-twitter-x-fill"></i></a> --}}
                                </div>
                                <div class="page-main__footer-cote">
                                    <a class="page-main__footer-icon__link" href="#"><i class="ri-emotion-happy-line"></i></a>
                                    <a class="page-main__footer-icon__link" href="#"><i class="ri-emotion-unhappy-fill"></i></a>
                                </div>
                    </div>
                    <div class="footer-article__tags">
                        <span class="footer-article__tag">Tourisme</span>
                        <span class="footer-article__tag">Rdc</span>
                        <span class="footer-article__tag">Office</span>
                        <span class="footer-article__tag">Jolie</span>
                    </div>
                   </footer>
                </article>

                <aside class="page-main__right">
                     <div class="article-recomanded__block-1">
                        <div class="article-recomanded__block-1_title">
                            <span>Article qui peuvent vous interrésser</span>
                        </div>
                         <div class="article-rec__block-1_top">
                            <div class="image_recomanded">
                                <img src="{{url("assets/images/Misc/ActuOnt/actu001/Kinshasa-Travel-Guide-Travel-S-Helper.jpg")}}" alt="" class="image-recomanded__link">
                                <a href="" class="image__recomanded-link">Kinshasa, Mboka Elengi</a>
                            </div>
                            <div class="content_recomanded_b1">
                                  <ul class="content_recomanded_b1-lists">
                                    <li class="content_recomanded_b1-list"><a class="content_recomanded_b1-link" href="">Le park de la cite de la N'sélé</a></li>
                                    <li class="content_recomanded_b1-list"><a class="content_recomanded_b1-link" href="">La sablière, Régalé vous au bord du lac</a></li>
                                    <li class="content_recomanded_b1-list"><a class="content_recomanded_b1-link" href="">Lola ya Bonobo, Immerger dansla vie de bonobo comme jamain au paravant</a></li>
                                    <li class="content_recomanded_b1-list"><a class="content_recomanded_b1-link" href="">Le MNRDC, le musée national de la RDC</a></li>
                                  </ul>
                            </div>
                         </div>
                         <div class="article-rec__block-1_bottom">
                           
                         </div>
                     </div>
                     <div class="article-recomanded__block-2">

                     </div>
                </aside>
            </div>
        </div>
    </div>
</div>
</section>
@include('layouts.pageMain.publicitySection')
@endsection
   


