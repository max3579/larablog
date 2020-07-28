@extends('layouts.app')

  @section('content')

  <div class="container">

    @foreach($categories as $c)

      <h2><a href="{{ route('categories.show', $c->slug) }}">{{ $c->name }}</a></h2>

    @endforeach

  </div>

  @endsection
