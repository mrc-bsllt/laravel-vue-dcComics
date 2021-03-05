@extends('layouts.main-admin')

@section('content')
    <div class="container">

      <div class="card my-4 text-center p-3">
        <div class="image">
          <img src="{{ $comic->image }}" alt="{{ $comic->title }}">
        </div>

        <div class="text">
          <h2>{{ $comic->title }}</h2>
          <p>{!! $comic->body !!}</p>
          <small class="text-right d-block h3"><strong>{{ $comic->price }} &#8364;</strong></small>
        </div>

      </div>

      <div class="buttons">
        <a class="btn btn-primary" href="{{ route("admin.comics.edit", $comic->id) }}">EDIT</a>
        <a class="btn btn-primary" href="{{ route("admin.comics.index") }}">BACK</a>
      </div>
    </div>
@endsection
