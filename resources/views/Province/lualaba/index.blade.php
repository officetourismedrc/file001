@extends('layouts.app')
@section('slider')
  @include('Province.lualaba.slider')
@endsection
@section('content')


@include('Province.lualaba.interactiveMap')
@include('Province.lualaba.article')
@include('Province.lualaba.explorerRegion')
@include('Province.lualaba.pointFortRegionaux')

{{-- @include('Province.kinshasa.festivalLocal')
@include('Province.kinshasa.attractionPopulaire')
@include('Province.kinshasa.localFood') --}}
@endsection
