@extends('layout')

@section('content')
<div class="card uper">
  <div class="card-header">
    Form About Articles
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form action="{{ route('Article.store') }}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="image_background">Category ID :</label>
              <input type="text" class="form-control" name="category_id"/>
          </div>
          <div class="form-group">
              <label for="title english">Image Thumbnail :</label>
              <input type="file" class="form-control" name="image_thumbnail">
          </div>
          <div class="form-group">
              <label for="title english">Slug :</label>
              <input type="text" class="form-control" name="slug">
          </div>
          <div class="form-group">
              <label for="title english">Title English :</label>
              <input type="text" class="form-control" name="title_en">
          </div>
          <div class="form-group">
              <label for="title english">Title Indonesia :</label>
              <input type="text" class="form-control" name="title_idn">
          </div>
          <div class="form-group">
              <label for="title english">Content English :</label>
              <input type="text" class="form-control" name="content_en">
          </div>
          <div class="form-group">
              <label for="title english">Content Indonesia :</label>
              <input type="text" class="form-control" name="content_idn">
          </div>
          <div class="form-group">
              <label for="title english">Is Highlight :</label>
              <input type="text" class="form-control" name="is_highlight">
          </div>
          <div class="form-group">
              <label for="title english">Created By :</label>
              <input type="text" class="form-control" name="created_by" value="{{ Auth::user()->name }}" readonly>
          </div>
          
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
    @endsection