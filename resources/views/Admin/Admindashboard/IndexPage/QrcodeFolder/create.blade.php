@extends('Admin.index')
@section('sectionC')
<div class="add__item-container">
    <form method="POST" action="{{ route('siteqrcodes.store') }}" class="add-item-form">
        @csrf
        
         <div class='module-insert'>
            <x-input-label for="desc" :value="__('qr code desc ')" class="input-item-desc" />
            <x-text-input id="desc" class="block mt-1 w-full input-item" type="text" name="desc" :value="old('desc')" required autofocus autocomplete="desc" />
            <x-input-error :messages="$errors->get('desc')" class="mt-2" />
              <p></p>
        </div>

        <!-- qr code name -->
        <div class='module-insert'>
            <x-input-label for="name" :value="__('qr code link')" class="input-item-desc" />
            <x-text-input id="name" class="block mt-1 w-full input-item" type="url" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <p></p>
        </div>
        
         <div class='module-insert'>
            <x-input-label for="qrcodestyle" :value="__('qr code style')" class="input-item-desc" />
            <select name="qrcodestyle" id="qrcodestyle" class="block mt-1 w-full input-item">
              
              <option value="dot">dot</option>
              <option value="square">square</option>
             
          </select>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <p></p>
         </div>

       
        <div class="flex items-center justify-end mt-4 input-item-save">
            <x-primary-button class="ms-3 input-item-btn">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    </form>
  </div>
@endsection