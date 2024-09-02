@extends('Admin.index')
@section('sectionC')
<form action='{{route('ont_a_metadata.store')}}' method='post' class='save-article__form' enctype="multipart/form-data" >
   
   @csrf
   
   <div class="save-art__container">
        <div class="save-art__controller1">
            <spam>menu</spam>
        </div>
        <div class="save-art__left">
         
        </div>
        <div class="save-art__right-container">
            <div class="save-art__right-content">
            <div class="save-art__right-top">
                <div class="save-art__right-top-item1">
                    <span>icon</span><span>open</span>
                </div>
            </div>
            <div class="save-art__right-bottom">
                <div class="save-art__right-bottom__icon">
                    <div class="save-art__right-bottom__icon-1"><span>+</span></div>
                    <div class="save-art__right-bottom__icon-1"><span>+</span></div>
                    <div class="save-art__right-bottom__icon-1"><span>+</span></div>
                    <div class="save-art__right-bottom__icon-1"><span>+</span></div>
                     <button class="save-art__right-bottom__icon-1" >S</button>
                </div>
                <div class="save-art__right-bottom__link">
                    <div class="save-art__right-bottom__link-1 ctr__paragraphe"><span>paragraph</span></div>
                    <div class="save-art__right-bottom__link-1 ctr__sub-title"><span>sub title</span></div>
                    <div class="save-art__right-bottom__link-1 ctr__simple-image"><span>image</span></div>
                    <div class="save-art__right-bottom__link-1">4 images</div>
                    <input style='border-radius:.5rem; font-weight:400; text-align:center; max-width:150px' class="save-art__right-bottom__submit save-art__right-bottom__link-1" value='Submit' name='submitBtnFrm'/>
                </div>
            </div>
            </div>
        </div>
    </div>
    </form>
@endsection