@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="notfound container text-center">
      <h1 class="m-t-40 m-b-40">Not Found...</h1>
      <div class="row d-flex flex-column text-center align-items-center justify-content-center">
        <img class="notfound__image" src="@asset('images/misc/404.jpg')"/>
        <h2 class="m-t-40 m-b-40"><span class="alt-color">Sorry!</span> The page you were trying to view does not exist.</h2>
      </div>
    </div>
  @endif
@endsection
