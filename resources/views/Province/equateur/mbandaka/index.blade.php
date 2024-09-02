@extends('layouts.app')
@section('slider')
  @include('Province.equateur.mbandaka.slider')
@endsection
@section('content')

@include('Province.equateur.mbandaka.interactiveMap')
@include('Province.equateur.mbandaka.article')

@endsection
