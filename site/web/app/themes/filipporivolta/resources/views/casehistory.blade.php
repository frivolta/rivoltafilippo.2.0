{{--
  Template Name: Home Page Template
--}}

@extends('layouts.app')

@section('content')
  @include('partials.slider')
  @include('partials.intro')
  @include('partials.education')
  @include('partials.experience')
  @include('partials.about')
  @include('partials.skillset')
  @include('partials.calltoaction')
  @include('partials.contact')
@endsection
