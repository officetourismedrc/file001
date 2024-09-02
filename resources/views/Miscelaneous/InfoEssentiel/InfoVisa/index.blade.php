@extends('layouts.app')
@section('slider')
    @include('Miscelaneous.InfoEssentiel.slider')
@endsection
@section('content')
   <div class="section section_visa">
      <div class="container visa__container">
          <h2 class="section__title-1">Comment obtenir son visa</h2>
          <div class="content">
            <div class="visa_article__container">
             
              <article class="visa__article">
                <h2 class="section__title-2">Ai-je besoin d'un visa pour venir en République Démocratique du Congo ?</h2>
                <p><br>Conformément à la loi et aux textes réglementaires en vigueur en RDC, Le
                            Ministère des affaires étrangères via des ambassades et postes consulaires
                            à l’étranger ainsi que la Direction Générale des Migrations sont habilités à
                            délivrer les visas aux expatriés désireux de venir visiter la Rdc, selon qu’il
                            s’agit d’un visa avec un long séjour ou un visa court séjour (visa volant ou
                            aéroportuaire). 
                            Le visa ne peut être accordé qu’aux requérants qui remplissent les
                            conditions déterminées par les textes légaux et réglementaires. <br>
                            Planifiez votre voyage et demandez le visa pour la République
                            Démocratique du Congo aussi longtemps à l’avance que possible. <br>
                            Remplissez votre demande complète et exacte. Dès son obtention,
                            préparez-vous à vivre des moments inoubliables.
                            </p>
                            <p>Pour venir en RDC, chaque visiteur doit préalablement soumettre une demande de visa auprès de l’ambassade de la RDC accrédité dans son pays. <br>
                            Vous pouvez vous rendre sur le site officiel de la <a href="http://www.evisa.gouv.cd">Direction Générale de Migration</a>  afin d’obtenir les informations supplémentaires. <br>
                            Même si vous êtes un citoyen de l’un des pays exemptés au visa, prenez quand même le temps de vérifier les règles officielles d’obligation de visa en RDC car elles connaissent parfois des modifications. <br>
                            La législation congolaise exige que tous les visiteurs de courte durée tiennent à justifier un voyage à venir en RDC.
                            Lesdits visiteurs sont photographiés, et leurs empreintes relevées à leur arrivée. Pendant leur séjour, ces derniers sont tenus d’avoir en permanence leurs passeports. <br>
                            Il est strictement interdit de travailler ou d’exercer des activités rémunérées avec un visa de courte durée.  

                            </p>
              </article>
              <aside class="visa__aside">
                 <img src="{{url('assets/images/Misc/InfoEss/InfoVisa/visa.jpg')}}" alt="" class="visa__image">
              </aside>
              </div>
              <div class="bottom__visa">

              </div>
          </div>
      </div>
   </div>
   @include('layouts.pageMain.publicitySection')
@endsection