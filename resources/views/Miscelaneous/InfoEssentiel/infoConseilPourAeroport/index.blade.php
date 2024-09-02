@extends('layouts.app')
@section('slider')
@include('Miscelaneous.InfoEssentiel.slider')
@endsection

@section('content')
<div class="section section_visa">
<div class="container visa__container">
    <h2 class="section__title-1">Accés à l'Aeroport</h2>
    <div class="content">
      <div class="visa_article__container">
       
        <article class="visa__article">
          <h2 class="section__title-2">La République Démocratique du Congo est situé au centre de l'Afrique, vous devrez donc probablement prendre un vol long-courrier pour vous y rendre.</h2>
         <p>Nous savons qu'être en mesure d'accéder facilement à votre hôtel ou hébergement après votre arrivée sur le sol Congolais figure parmi vos priorités. 
                                Par chance, les aéroports des grandes villes Congolaise sont très bien desservis par les bus et les taxis, et disposent généralement de services de location de voiture. 
                                Vous pourrez ainsi rejoindre votre logement aisément. Pour faciliter votre séjour, nous vous conseillons de vous renseigner sur les horaires des différents modes de transport.</p>
        </article>
        <aside class="visa__aside">
           <img src="{{url('assets/images/Misc/InfoEss/PremierSejour/hotel.avif')}}" alt="hotel" class="visa__image">
        </aside>
        </div>
        <div class="bottom__visa">

        </div>
    </div>
</div>
</div>
@include('layouts.pageMain.publicitySection')
@endsection