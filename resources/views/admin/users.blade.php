@extends('layouts.app')

@include('partials.meta_static')

  @section('content')

  <div class="container-fluid">

    <div class="jumbotron">

      <h1>Manage Users</h1>

    </div>

    <div class="col-md-12">

      <div class="row">

        @foreach($users as $user)

        <div class="col-md-4">

            <form action="{{ route('users.update', $user->id) }}" method="post">

                {{ method_field('patch') }}

                <div class="form-group">

                  <input type="text" class="form-control" value="{{ $user->name }}" disabled>

                </div>

                <div class="form-group">

                  <select class="form-control" name="role_id">

                    <option selected>{{ $user->role->name }}</option>

                    <option value="2">Author</option>

                    <option value="3">Subscriber</option>

                  </select>

                </div>

                <div class="form-group">

                  <input type="text" class="form-control" value="{{ $user->email }}" disabled>

                </div>

                <div class="form-group">

                  <input type="text" class="form-control" value="{{ $user->created_at->diffForHumans() }}" disabled>

                </div>

                <button type="button" class="btn btn-primary btn-xs pull-left col-md-12" name="button">Update</button>

                {{ csrf_field() }}

            </form>

            <form action="{{route('users.destroy', $user)}}" method="post">

                {{ method_field('delete') }}

                <button type="submit" class="btn btn-danger btn-xs pull-left col-md-12 mt-1">Delete</button>

                {{ csrf_field() }}

            </form>

        </div>

        @endforeach

      </div>

    </div>

  </div>

  @endsection
