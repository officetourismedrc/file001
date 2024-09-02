@extends('layouts.app')
@section('slider')
  @include('Province.sud_kivu.slider')
@endsection
@section('content')


@include('Province.sud_kivu.interactiveMap')
@include('Province.sud_kivu.article')
@include('Province.sud_kivu.explorerRegion')
@include('Province.sud_kivu.pointFortRegionaux')

{{-- @include('Province.kinshasa.festivalLocal')
@include('Province.kinshasa.attractionPopulaire')
@include('Province.kinshasa.localFood') --}}
@endsection
