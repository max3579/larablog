@extends('layouts.app')

  @section('content')

    @include('partials.tinymce')

    <div class="container-fluid">

      <div class="jumbotron">

        <h1>Create a new blog</h1>

      </div>

      <div class="col-md-12">

        <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">

          @include('partials.error-message')

          <div class="form-group">

            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" value="{{ old('title') }}">

          </div>

          <div class="form-group">

            <label for="body">body</label>
            <textarea class="form-control" name="body" value="{{ old('body') }}">  </textarea>

          </div>

          <div class="form-group form-check form-check-inline">

            @foreach($categories as $category)

            <input type="checkbox" value="{{ $category->id }}" name="category_id[]" class="form-check-input">
            <label class="form-check-label btn-margin-right">{{ $category->name }}</label>

            @endforeach

          </div>

          <div class="form-group">
            <label class="btn btn-default">
              <span class="btn btn-outline btn-sm btn-info">Upload image</span>
              <input type="file" name="featured_image" class="form-control" hidden>
            </label>
          </div>

          <div>
            <button class="btn btn-primary" type="submit">Create new blog</button>
          </div>

          {{ csrf_field() }}

        </form>

      </div>

    </div>

    <!-- <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
    var editor_config = {
      path_absolute : "",
      selector: "textarea[name=body]",
      plugins: [
        "link image"
      ],
      relative_urls: false,
      height: 129,
      file_browser_callback : function(field_name, url, type, win) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
        var cmsURL = editor_config.path_absolute + route_prefix + '?field_name=' + field_name;
        if (type == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }
        tinyMCE.activeEditor.windowManager.open({
          file : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no"
        });
      }
    };
    tinymce.init(editor_config); -->
  </script>

  @endsection
