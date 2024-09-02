@extends('layouts.app')
@section('slider')
  @include('Province.nord_kivu.slider')
@endsection
@section('content')


@include('Province.nord_kivu.interactiveMap')
@include('Province.nord_kivu.article')
@include('Province.nord_kivu.explorerRegion')
@include('Province.nord_kivu.pointFortRegionaux')

{{-- @include('Province.kinshasa.festivalLocal')
@include('Province.kinshasa.attractionPopulaire')
@include('Province.kinshasa.localFood') --}}
@endsection
