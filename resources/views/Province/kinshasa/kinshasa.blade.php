@extends('layouts.app')
@section('slider')
  @include('Province.kinshasa.kinshasaSlider')
@endsection
@section('content')


@include('Province.kinshasa.interactiveMapKinshasa')
@include('Province.kinshasa.articleKinshasa')
@include('Province.kinshasa.explorerRegion')
@include('Province.kinshasa.pointFortRegionaux')

{{-- @include('Province.kinshasa.festivalLocal')
@include('Province.kinshasa.attractionPopulaire')
@include('Province.kinshasa.localFood') --}}
@endsection
