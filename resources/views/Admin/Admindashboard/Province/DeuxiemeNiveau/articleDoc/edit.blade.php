@extends('Admin.index')
@section('sectionC')
  <div class="add__item-container">
    <form method="POST" action="{{route('deuxniveau.update',['deuxniveau'=>$deuxniveau->id])}}" class="add-item-form">
        @csrf
        @method('PUT')
        <!-- Province name -->
        <div class='module-insert'>
            <x-input-label for="name" :value="__('Province')" class="input-item-desc" />
            <select name="province_id" id="province-name" class="block mt-1 w-full input-item">
              @foreach ($data['province'] as $item)
              @if ($item->id === $deuxniveau->id)
              <option value="{{$item->id}}" selected>{{$item->name}}</option>
              @else
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endif
             
              @endforeach 
          </select>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <p></p>
       
              
            <x-input-label for="name" :value="__('decoupage')" class="input-item-desc" />
            {{-- <x-text-input id="decoupage" class="block mt-1 w-full input-item" type="text" name="name" :value="ville" required autofocus autocomplete="name" /> --}}
            <select name="decoupagecatg_id" id="province-name" class="block mt-1 w-full input-item">
              @foreach ($data['category'] as $item)
              @if ($item->id === $deuxniveau->decoupagecatg_id)
               <option value="{{$item->id}}">{{$item->name}}</option>
              @else
               <option value="{{$item->id}}">{{$item->name}}</option>
              @endif
              @endforeach 
          </select>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
              <p></p>
        </div>

        <div class='module-insert'>
            <x-input-label for="name" :value="__('name')" class="input-item-desc" />
            <x-text-input id="name" class="block mt-1 w-full input-item" type="text" name="name" :value=" old('deuxniveau', $deuxniveau->name)" required autofocus autocomplete="name" />
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