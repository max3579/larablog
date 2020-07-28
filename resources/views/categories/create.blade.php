@extends('layouts.app')

  @section('content')

    <div class="container-fluid">

      <div class="jumbotron">

        <h1>Create a new category</h1>

      </div>

      <div class="col-md-12">

        <form action="{{ route('categories.store') }}" method="post">

          <div class="form-group">

            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}">

          </div>


          <button class="btn btn-primary" type="submit">Create new category</button>

          {{ csrf_field() }}

        </form>

      </div>

    </div>

  @endsection
