@extends('layouts.app')
@section('slider')
  @include('Province.tshopo.slider')
@endsection
@section('content')


@include('Province.tshopo.interactiveMap')
@include('Province.tshopo.article')
@include('Province.tshopo.explorerRegion')
@include('Province.tshopo.pointFortRegionaux')

{{-- @include('Province.kinshasa.festivalLocal')
@include('Province.kinshasa.attractionPopulaire')
@include('Province.kinshasa.localFood') --}}
@endsection
