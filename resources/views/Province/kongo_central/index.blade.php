@extends('layouts.app')
@section('slider')
  @include('Province.equateur.slider')
@endsection
@section('content')


@include('Province.equateur.interactiveMap')
@include('Province.equateur.article')
@include('Province.equateur.explorerRegion')
@include('Province.equateur.pointFortRegionaux')

{{-- @include('Province.kinshasa.festivalLocal')
@include('Province.kinshasa.attractionPopulaire')
@include('Province.kinshasa.localFood') --}}
@endsection
