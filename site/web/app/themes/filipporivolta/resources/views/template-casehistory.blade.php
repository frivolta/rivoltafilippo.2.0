{{--
  Template Name: Case History Template
--}}

@extends('layouts.app')

@section('content')
  @include('partials.slider')
  @include('partials.case-history.carousel-alt')
  @include('partials.intro')
  @include('partials.case-history.timeline')
  @include('partials.about')
  @include('partials.case-history.graphs')
  @include('partials.calltoaction')
  @include('partials.contact')
@endsection
