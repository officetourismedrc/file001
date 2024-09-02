@extends('layouts.app')
@section('slider')
  @include('Province.haut_katanga.slider')
@endsection
@section('content')


@include('Province.haut_katanga.interactiveMap')
@include('Province.haut_katanga.article')
@include('Province.haut_katanga.explorerRegion')
@include('Province.haut_katanga.pointFortRegionaux')

{{-- @include('Province.kinshasa.festivalLocal')
@include('Province.kinshasa.attractionPopulaire')
@include('Province.kinshasa.localFood') --}}
@endsection
