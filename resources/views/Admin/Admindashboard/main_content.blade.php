@extends('Admin.index')
@section('sectionC')
<div class="main-main__container">
       <div class="main_block">
          <h2 class="section__title">Map Section</h2>
          
          <div class="main_block-description">
             <div class="map-container" id="regions_div" style="width:600px; height:400px;">
              @include('Admin.helper.word_map')
             </div>
          </div>
       </div>
       <div class="main_block">
         <h2 class="section__title">section title</h2>
         <div class="main_block-description">
             
         </div>
       </div>
       <div class="main_block">
         <h2 class="section__title">section title</h2>
         <div class="main_block-description">
             
         </div>
       </div>
   </div>
@endsection