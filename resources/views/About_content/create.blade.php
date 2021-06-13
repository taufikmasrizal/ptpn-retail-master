@extends('layout')

@section('content')
<div class="card uper">
  <div class="card-header">
    Form About Content
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
    <form action="{{ route('About_content.store') }}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="image_background">Image Background :</label>
              <input type="file" class="form-control" name="image_background"/>
          </div>
          <div class="form-group">
              <label for="title english">Title English :</label>
              <input type="text" class="form-control" name="title_en">
          </div>
          <div class="form-group">
              <label for="Title Indonesia">Title Indonesia :</label>
              <input type="text" class="form-control" name="title_idn"/>
          </div>
          <div class="form-group">
              <label for="Content Indonesia">Content Indonesia :</label>
              <input type="text" class="form-control" name="content_idn"/>
          </div>
          <div class="form-group">
              <label for="Content English">Content English :</label>
              <input type="text" class="form-control" name="content_en"/>
          </div>
          <div class="form-group">
              <label for="cases">Sort :</label>
              <input type="text" class="form-control" name="sort"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
    @endsection