@extends('Admin.index')
@section('sectionC')
  <div class="add__item-container">
    

     <div class="ex_form_container">
        <form method="POST" action="{{ route('ontactuart.store') }}" class="ex_form_form" enctype="multipart/form-data">
            @csrf
            
          <h2 class="ex_form__title"> ONT article </h2>
          
          
          <div class="ex_form__section">
             <div class="ex_form_label__container ex_form__section_item">
                  <label for="" class="ex_form_label">Article title</label> 
             </div>
             <div class="ex_form_inputs__container ex_form__section_item">
                <input type="text" class="ex_form_input" name="title">
             </div>
          </div>
          <div class="ex_form__section">
             <div class="ex_form_label__container ex_form__section_item">
                  <label for="" class="ex_form_label">Article category</label> 
             </div>
             <div class="ex_form_inputs__container ex_form__section_item">
                <select class="ex_form_input" name='articleCategory'>
                @foreach($data['articlecatg'] as $option)
                <option value="{{$option->id}}">{{$option->name}}</option>
                @endforeach
                </select>
             </div>
          </div>
          
          <div class="ex_form__section">
             <div class="ex_form_label__container ex_form__section_item">
                  <label for="" class="ex_form_label">Article tags</label> 
             </div>
             <div class="ex_form_inputs__container ex_form__section_item">
                 <div style="display:flex; flex-wrap:wrap; max-width:600px"; column-gap:1rem;>
                @foreach($data['articleTag'] as $option)
               <spam style="border-radius:.5rem; border:1px solid blue; background-color:yellow;padding:.2rem;"> <input type="checkbox" name="tags[]" value="{{$option->id}}" /> {{$option->name}}</spam>
                @endforeach
                </div>
             </div>
          </div>
          
          <div class="ex_form__section">
            <div class="ex_form_label__container ex_form__section_item">   
                 <label for="" class="ex_form_label">icon Path</label> 
            </div>
            <div class="ex_form_inputs__container ex_form__section_item">
               <input type="file" class="ex_form_input" name="iconPath">
            </div>
         </div>
         
          <div class="ex_form__section">
            <div class="ex_form_label__container ex_form__section_item">
                 <label for="" class="ex_form_label">Priority</label> 
            </div>
            <div class="ex_form_inputs__container ex_form__section_item">
               <input type="number" min="0" class="ex_form_input" name="priority" >
            </div>
         </div>
         
         <div class="ex_form__section" style="border:1px solid gray; border-radius:.5rem; padding:1rem .5rem">
             <div class="ex_form_label__container ex_form__section_item">
                  <label for="" class="ex_form_label">Slider Image</label> 
             </div>
             <div class="ex_form_inputs__container ex_form__section_item">
                <input type="file" class="ex_form_input" name="banner[]" multiple>
             </div>
          </div>
          
          <div class="ex_form__section" >
             <div class="ex_form_label__container ex_form__section_item">
                  <label for="" class="ex_form_label">Title Image</label> 
             </div>
             <div class="ex_form_inputs__container ex_form__section_item">
                <input type="file" class="ex_form_input" name="titleImage">
             </div>
          </div>
          
          <div class="ex_form__section" >
             <div class="ex_form_label__container ex_form__section_item">
                  <label for="" class="ex_form_label">Publish date</label> 
             </div>
             <div class="ex_form_inputs__container ex_form__section_item">
                <input type="date" class="ex_form_input" name="publishDate">
             </div>
          </div>
         
         <div class="ex_form__section">
            <div class="ex_form_label__container ex_form__section_item">
                 <label for="" class="ex_form_label">Content Switcher</label> 
            </div>
            <div class="ex_form_inputs__container ex_form__section_item">
               <div style='display:flex;'>
                   
                 <label id="forOn">On</label>
                <input type="radio"  class="ex_form_input" name="contentSwitcher" id="forOn" value="true" checked>
                
                
                <label id="forOff">Off</label>
                <input type="radio"  class="ex_form_input" name="contentSwitcher" id='forOff' value="false">
                
                </div>
            </div>
         </div>
         
         <div class="ex_form__section">
            <div class="ex_form_label__container ex_form__section_item">
                
                 <button  class="ex_form_input" >Submit</button>
            </div>
            <div class="ex_form_inputs__container ex_form__section_item">
              
            </div>
         </div>
         
         
      
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
       @endif
       

        </form> 
        
        
       
    </div>
    </div>
  </div>
@endsection