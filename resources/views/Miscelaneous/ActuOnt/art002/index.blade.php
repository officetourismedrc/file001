@extends('layouts.app')
@section('slider')
@include('Miscelaneous.ActuOnt.art002.slider')
@endsection
@section ('content')
<section class="section_ontarticles section">
     
 <div class="container ont-article-container">
     <div class="article-title__block container">
         <h1></h1>
                            <h1 class="article_main__title">{{$article['article']->title}}</h1>
                            
    </div>
            <div class="content ont-article">
               
                <article class="ont-main-article-container">
                    <div class="ont-main-article-content">
                        <div class="ont-article-main-block">
                       

                       <div class="article-top__image">
                        @foreach ($article['article']['images'] as $item)
                        @if ($item->image_category === 'title' )  
                            <img src="{{url($item->image_path)}}" alt="">
                        @endif
                        @endforeach
            
                        
                        </div>

                       <div class="article__meta-data">
                        <i class="ri-user-fill"></i>
                       <span class="article_publishing__date">{{$article['article']->publish_date}}</span>
                       <span class="article_author">{{$article['article']->author_name}}</span>
                       </div>

                       <div class="article__text-text">
                        <p>Une femme succède à une autre femme à la tête de l’Office National du Tourisme. Rosette SAIBA LWANZO, DG intérimaire s’en va et laisse la place à YOMBO MUKENDI Jolie. Elle est arrivée à la tête de cet office comme une intérimaire  avant d’être confirmée à ce poste plus tard.</p>
                        <p>Avant de se mettre à l’ouvrage, elle a été présentée au personnel de l’Office National du Tourisme ce 4 février 2021, au siège de cet établissement public. Ces hommes et femmes n’ont pas caché leur joie d’avoir une dame pétrie des talents comme Directeur Général. </p>
                        <p>Avant de rejoindre l’ONT, YOMBO MUKENDI Jolie a œuvré dans les nombreuses entreprises en dehors du pays. L’expérience acquise dans ce parcours va certainement servir à relever l’Office National de Tourisme.  </p>
                       </div>

                       <div class="footer-article__tags">
                        <span class="footer-article__tag">Tourisme</span>
                        <span class="footer-article__tag">Rdc</span>
                        <span class="footer-article__tag">Office</span>
                        <span class="footer-article__tag">Jolie</span>
                    </div>

                  </div>
                     
                  <aside class="prefered-article__container">
                    
                </aside>


                    </div>
                </article>


                <aside class="article-share__icon-container">
                    <div class="prefered-article__content">
                        <div class="article-recomanded__block-1">
                            <div class="article-recomanded__block-1_title">
                                <span>Article qui peuvent vous interrésser</span>
                                <i class="ri-arrow-up-double-fill"></i>
                            </div>
                             <div class="article-rec__block-1_top">
                                <div class="image_recomanded">
                                    <img src="{{url('assets/images/grand_hotel.webp')}}" alt="" class="image-recomanded__link">
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
                    </div>

                    <div class="article-share__icon-content">
                        <div class="article__text-share">
                            <div class="article__text-share-title">
                               <span>share this content</span>
                            </div>
                            <div class="article__text-share-icon-container">
                               <span class="article__text-share-icon"><a href="#"><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M308.3,508.5c-2.5,0.1-4.1,0.3-5.7,0.3c-34.2,0-68.3-0.1-102.5,0.1c-4.8,0-6.1-1.3-6.1-6.1c0.1-79.6,0.1-159.3,0.1-238.9   c0-2.1,0-4.2,0-6.9c-18.6,0-36.7,0-55.1,0c0-28.4,0-56.3,0-85c1.9,0,3.7,0,5.4,0c15,0,30-0.1,45,0.1c3.8,0,4.8-1.1,4.8-4.8   c-0.2-22.3-0.2-44.7,0-67c0.1-15.6,2.6-30.8,9.8-44.9c10.3-19.9,26.6-32.8,47.2-40.8c16.8-6.6,34.5-9,52.3-9.3   c29-0.4,58-0.2,87-0.3c2.7,0,4.9-0.1,4.9,3.7c-0.1,27.5-0.1,55-0.1,82.5c0,0.3-0.1,0.6-0.5,1.9c-1.7,0-3.6,0-5.5,0   c-18,0-36-0.1-54,0c-10.4,0-18.8,4.2-24.1,13.3c-1.6,2.7-2.6,6.2-2.6,9.4c-0.3,17,0,34-0.2,51c0,4,1.2,5.1,5.1,5.1   c25-0.2,50-0.1,75-0.1c2,0,3.9,0,7.3,0c-3.5,28.6-6.9,56.6-10.4,84.9c-26,0-51.3,0-77.1,0C308.3,340.8,308.3,424.4,308.3,508.5z"/></g></svg></a></span>
                              
                               <span class="article__text-share-icon"><a href=""><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M173.5,508.7c0-2.4,0-4.7,0-7c0-107.7,0-215.3,0-323c0-3-0.2-5.4,4.2-5.4c31.8,0.2,63.7,0.1,95.5,0.1   c0.8,0,1.6,0.2,2.9,0.4c0,14,0,27.8,0,41.7c0.4,0.1,0.7,0.3,1.1,0.4c4-5.2,7.8-10.6,12-15.7c12.2-15,27.5-26,45.5-32.6   c9.8-3.6,20.5-5.8,30.8-6.3c14.2-0.6,28.7-0.4,42.7,2c23,3.9,43.3,14.1,60.1,30.8c15.9,15.7,26.4,34.6,32.1,55.9   c3,11.3,4.9,22.9,6.7,34.4c1.2,8,1.8,16.2,1.8,24.2c0.1,65,0.1,130,0.1,195c0,1.6-0.1,3.2-0.2,5.3c-1.9,0-3.5,0-5.1,0   c-30.7,0-61.3-0.1-92,0.1c-5.1,0-6-1.7-6-6.3c0.1-59.8,0.3-119.7-0.1-179.5c-0.1-10.5-1.1-21.4-3.8-31.5   c-4.9-17.7-16.1-30.5-33.9-37c-15-5.5-30.2-6.5-45.6-2.6c-17,4.3-28.7,15.6-37.5,30.5c-6.8,11.5-8.1,24.2-8.2,36.9   c-0.4,60.7-0.2,121.3-0.2,182c0,2.3,0,4.6,0,7.1C241.9,508.7,208,508.7,173.5,508.7z"/><path d="M109.1,342.6c0,53.3-0.1,106.6,0.1,159.9c0,4.8-1,6.6-6.3,6.5c-30.5-0.3-61-0.3-91.5,0c-5,0-6.1-1.7-6.1-6.3   c0.1-107.1,0.1-214.3,0-321.4c0-4.3,1.2-5.8,5.6-5.8c30.8,0.2,61.6,0.2,92.5,0c4.8,0,5.7,1.8,5.7,6.1   C109.1,235.3,109.1,289,109.1,342.6z"/><path d="M56.1,4.8C89,4,108.7,27.9,108.8,57.2c0.1,30-20.9,52.4-53.9,52.3c-30.7,0-52.4-22-52.3-53.1C2.7,27.3,23.8,3.8,56.1,4.8z"/></g></svg></a></span>
                               <span class="article__text-share-icon">
                                            <a href=""><?xml version="1.0" encoding="utf-8"?>
                                            <!-- Generator: Adobe Illustrator 27.5.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                            <svg version="1.1" id="svg5" xmlns:svg="http://www.w3.org/2000/svg"
                                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1668.56 1221.19"
                                                style="enable-background:new 0 0 1668.56 1221.19;" xml:space="preserve">
                                            <g id="layer1" transform="translate(52.390088,-25.058597)">
                                                <path id="path1009" d="M283.94,167.31l386.39,516.64L281.5,1104h87.51l340.42-367.76L984.48,1104h297.8L874.15,558.3l361.92-390.99
                                                    h-87.51l-313.51,338.7l-253.31-338.7H283.94z M412.63,231.77h136.81l604.13,807.76h-136.81L412.63,231.77z"/>
                                            </g>
                                            </svg></a>
                                </span>
                               
                            </div>
                          </div>
                    </div>

                </aside>
                
            </div>
        </div>
</section>
@include('layouts.pageMain.publicitySection')
@endsection
   



   



   


