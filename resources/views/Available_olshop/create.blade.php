@extends('layout')

@section('content')
<div class="card uper">
  <div class="card-header">
    Form About Available Olshop
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
    <form action="{{ route('Available_olshop.store') }}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="image_icon 2">Image Icon 1 :</label>
              <input type="file" class="form-control" name="image_icon1"/>
          </div>
          <div class="form-group">
              <label for="image_icon 2">Image Icon 2 :</label>
              <input type="file" class="form-control" name="image_icon2">
          </div>
          <div class="form-group">
              <label for="title english">Image Icon 3 :</label>
              <input type="file" class="form-control" name="image_icon3">
          </div>
          <div class="form-group">
              <label for="title english">Name :</label>
              <input type="text" class="form-control" name="name">
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
    @endsection