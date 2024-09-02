@extends('Admin.index')
@section('sectionC')
  <div class="add__item-container">
    <form method="POST" action="{{ route('ont_a_catmeta.update',['ont_a_catmeta'=>$data->id]) }}" class="add-item-form">
        @csrf
        @method('PUT')
       <div class="module-title">
           <h2 class="section-title__2">{{__('Edit cataegory')}}</h2>
       </div>
        <!-- Province name -->
        <div class='module-insert'>
            <x-input-label for="name" :value="__('Category')" class="input-item-desc" />
            <input type="text" name="name" id="name" value={{$data->name}} class="block mt-1 w-full input-item">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <p></p>
        </div>

       
        <div class="flex items-center justify-end mt-4 input-item-save">
            <x-primary-button class="ms-3 input-item-btn">
                {{ __('Update') }}
            </x-primary-button>
        </div>
        
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style='color:red;'>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
       @endif
       
    </form>
  </div>
@endsection