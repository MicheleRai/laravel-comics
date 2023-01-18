@extends('guest.layouts.base')

@section('content')

<div class="container-main">
    <div class="content-main">
      <h1
        class="title"
      >
        CURRENT SERIES
      </h1>
      <div class="card-container">
        @foreach ($comics as $comic)
        <a
        class="card"
        href="/comics"
      >
        <img
          :src="{{$comic['thumb']}}"
          alt="fumetto"
        >
        <h3>{{ $comic['series'] }}</h3>
      </a>
        @endforeach
      </div>
    </div>
</div>


@endsection
