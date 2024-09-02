@extends('layouts.app')
@section('slider')
    @include('Miscelaneous.InfoEssentiel.slider')
@endsection
@section('content')
   <div class="section section_visa">
      <div class="container visa__container">
          <h2 class="section__title-1">Information sur le transport</h2>
          <div class="content">
            <div class="visa_article__container">
             
              <article class="visa__article">
                <h2 class="section__title-2">All you need to know about entering, leaving and staying in D.R.Congo</h2>
                Any foreign visitor entering R.D.Congo must have a valid passport for the duration of their stay, and all visitors must comply with the conditions of their visas.

                See below for information about the current visa requirements for R.D.Congo.
                
                Visa Information
                
                If you have any further questions, please contact the Congolese embassy or consulate in your country of residence.
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