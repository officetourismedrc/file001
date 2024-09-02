@extends('Admin.index')
@section('sectionC')
  <div class="add__item-container">
    <form method="POST" action="{{ route('ont_a_catmeta.store') }}" class="add-item-form">
        @csrf

        <!-- Province name -->
        <div class='module-insert'>
            <x-input-label for="name" :value="__('category')" class="input-item-desc" />
            <x-text-input id="name" class="block mt-1 w-full input-item" type="text" name="name" :value="old('ont_a_catmeta')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <p></p>
        </div>
        
        <div class='module-insert'>
            <x-input-label for="desc" :value="__('description')" class="input-item-desc" />
            <x-text-input id="desc" class="block mt-1 w-full input-item" type="text" name="desc" :value="old('ont_a_catmeta')" required autofocus autocomplete="desc" />
            <x-input-error :messages="$errors->get('desc')" class="mt-2" />
              <p></p>
        </div>

       
        <div class="flex items-center justify-end mt-4 input-item-save">
            <x-primary-button class="ms-3 input-item-btn">
                {{ __('Save') }}
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