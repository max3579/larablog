@extends('layouts.app')

  @section('content')

    <div class="container-fluid">

      <div class="jumbotron">

        <h1>Contact page</h1>

      </div>

      <div class="col-md-8 offset-md-2">

        <form action="{{ route('mail.send') }}" method="post">

          @include('partials.error-message')

          <div class="form-group">

            <label for="name">Title</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}">

          </div>

          <div class="form-group">

            <label for="email">Email</label>
            <textarea class="form-control" name="email" value="{{ old('email') }}">  </textarea>

          </div>

          <div class="form-group">

            <label for="subject">Subject</label>
            <textarea class="form-control" name="subject" value="{{ old('subject') }}">  </textarea>

          </div>

          <div class="form-group">

            <label for="message">Message</label>
            <textarea class="form-control" name="mail_message" value="{{ old('mail_message') }}">  </textarea>

          </div>

          <div>
            <button class="btn btn-primary" type="submit">Send</button>
          </div>

          {{ csrf_field() }}

        </form>

      </div>

    </div>

  @endsection
